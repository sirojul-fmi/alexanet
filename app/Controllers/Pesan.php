<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MemberModel;
use App\Models\PemesananModel;
use App\Models\UserModel;
use App\Models\PesanModel;

class Pesan extends BaseController
{
    private $pemesanan = '';
    private $member = '';
    private $user = '';
    private $pesan = '';

    public function __construct()
    {
        $this->pemesanan = new PemesananModel();
        $this->member = new MemberModel();
        $this->user = new UserModel();
        $this->pesan = new PesanModel();
    }

    public function index()
    {
        $db = db_connect();
        
        $result = $db->query("SELECT count(id) AS pesan FROM pemesanan WHERE status='pending'");
        $upgrade = $db->query("SELECT count(id) as pesan FROM messages WHERE jenis_pesan='upgrade' AND status='unread'");
        $stop = $db->query("SELECT count(id) as pesan FROM messages WHERE jenis_pesan='unsubscribe' AND status='unread'");

        $data['pasang'] = $result->getResultArray();
        $data['upgrade'] = $upgrade->getResultArray();
        $data['stop'] = $stop->getResultArray();

        return view('admin/pesan/index.php', $data);
    }

    public function listPesan($params=null)
    {
        $db = db_connect();
        $query = $db->query("SELECT pemesanan.*, packets.*, customers.* 
                FROM pemesanan, packets, customers 
                WHERE pemesanan.customer_id=customers.customer_id
                AND pemesanan.packet_id=packets.packet_code 
                AND pemesanan.status='pending'");
        
        $upgrade = $db->query("SELECT 
                JSON_UNQUOTE(JSON_EXTRACT(messages.keterangan, '$.paket')) AS up_paket, 
                JSON_UNQUOTE(JSON_EXTRACT(messages.keterangan, '$.keterangan')) AS keterangan, 
                messages.id, 
                members.status, members.user_id, members.customer_id, 
                packets.packet, packets.bandwidth, packets.price, 
                customers.nama, customers.nohp, customers.alamat 
                FROM messages, members, packets, customers 
                WHERE messages.member_id=members.id 
                AND members.customer_id=customers.customer_id 
                AND members.packet_id=packets.packet_code 
                AND messages.jenis_pesan='upgrade' 
                AND messages.status='unread'");

        $stop = $db->query("SELECT 
                messages.id, 
                members.status, members.user_id, members.customer_id, 
                packets.packet, packets.bandwidth, packets.price, 
                customers.nama, customers.nohp, customers.alamat 
                FROM messages, members, packets, customers 
                WHERE messages.member_id=members.id 
                AND members.customer_id=customers.customer_id 
                AND members.packet_id=packets.packet_code 
                AND messages.jenis_pesan='unsubscribe' 
                AND messages.status='unread'");
            
        $data['pemasangan'] = $query->getResultArray();
        $data['upgrade'] = $upgrade->getResultArray();
        $data['stop'] = $stop->getResultArray();

        if ($params == 'pemasangan') {
            return view('admin/pesan/list_pesan_pemasangan.php', $data);
        }else if ($params == 'upgrade') {
            return view('admin/pesan/list_pesan_upgrade.php',$data);
        }else if($params == 'pencopotan'){
            return view('admin/pesan/list_pesan_pencopotan.php',$data);
        }

    }

    public function Konfirmasi()
    {
        $user_id = uniqid('USR');
        $status = 'new';
        $id = $this->request->getVar('id');

        $data = [
            'customer_id' => $this->request->getVar('customer_id'),
            'packet_id' => $this->request->getVar('packet_id'),
            'status' => $status,
            'user_id' => $user_id,
        ];

        $update = [
            'status' => 'finish',
        ];

        $user = [
            'user_id' => $user_id,
            'username' => '',
            'password' => '',
            'role' => 'member',
        ];

        try {
            $this->member->insert($data);
            $this->user->insert($user);
            $this->pemesanan->update($id, $update);

            return redirect()->to(base_url('admin/pesan/list/pemasangan'))->with('success', 'Konfirmasi pemasangan berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function konfirmasiUpdate()
    {
        $id = $this->request->getVar('id');
        $user_id = $this->request->getVar('user_id');
        $packet_code = $this->request->getVar('packet_id');

        try {
            $member = [
                'packet_id' => $packet_code,
            ];

            $pesan = [
                'status' => 'read',
            ];

            $this->member->updateData('user_id', $user_id, $member);
            $this->pesan->update($id, $pesan);

            return redirect()->to(base_url('admin/pesan/list/upgrade'));
        } catch (\Exception $th) {
            echo "Error : " . $th;
        }
    }

    public function konfirmasiStop()
    {
        $id = $this->request->getVar('id');
        $user_id = $this->request->getVar('user_id');

        $pesan = [
            'status' => 'read',
        ];

        $member = [
            'status' => 'inactive',
        ];

        try {
            $this->pesan->update($id, $pesan);
            $this->member->updateData('user_id', $user_id, $member);

            return redirect()->to(base_url('admin/pesan/list/pencopotan'));
        } catch (\Exception $th) {
            echo "Error : " .$th;
        }
    }

}
