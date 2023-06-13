<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MemberModel;
use App\Models\PacketModel;
use App\Models\PesanModel;
use App\Models\UserModel;

class User extends BaseController
{
    private $user = '';
    private $paket = '';
    private $pesan = '';
    private $member = '';

    public function __construct()
    {
        $this->user = new UserModel();
        $this->paket = new PacketModel();
        $this->pesan = new PesanModel();
        $this->member = new MemberModel();
    }

    public function index()
    {
        $data['user'] = $this->user->getDataUser();
        return view('user/index.php',$data);
    }

    public function upgrade()
    {
        $data['paket'] = $this->paket->findAll();
        $data['user'] = $this->user->getDataUser();
        return view('user/upgrade.php', $data);
    }

    public function getPacketByCode()
    {
        $code = $this->request->getVar('code');
        $result = $this->paket->getPacketByCode($code);
        echo json_encode($result);
        // echo $result;
    }

    public function upgradeProcess()
    {
        $id = $this->request->getVar('user_id');
        $paket_code = $this->request->getVar('select_packet');
        $ket = $this->request->getVar('keterangan');
        
        $db = db_connect();
        $member = $db->query("SELECT id FROM members WHERE user_id='$id'");
        $result = $member->getResultArray();

        $member_id = $result[0]['id'];

        $keterangan = [
            'paket' => $paket_code,
            'keterangan' => $ket,
        ];

        $keterangan = json_encode($keterangan);

        $data = [
            'member_id' => $member_id,
            'jenis_pesan' => 'upgrade',
            'keterangan' => $keterangan,
            'status' => 'unread',
        ];

        try {
            $this->pesan->insert($data);
            return redirect()->to(base_url('user/upgrade'))->with('success', 'Permohonan upgrade paket anda berhasil');
        } catch (\Exception $th) {
            echo "Error : " . $th;
            return redirect()->to(base_url('user/upgrade'))->with('failed', 'Permohonan upgrade paket anda gagal');
        }

    }

    public function unsubscribe()
    {
        $data['user'] = $this->user->getDataUser();
        return view('user/unsubscribe.php', $data);
    }

    public function unsubscribeProcess()
    {
        $id = $this->request->getVar('user_id');
        $keterangan = $this->request->getVar('keterangan');
        
        $db = db_connect();
        $member = $db->query("SELECT id FROM members WHERE user_id='$id'");
        $result = $member->getResultArray();

        $member_id = $result[0]['id'];

        $data = [
            'member_id' => $member_id,
            'jenis_pesan' => 'unsubscribe',
            'keterangan' => $keterangan,
            'status' => 'unread',
        ];

        try {
            $this->pesan->insert($data);
            return redirect()->to(base_url('user/unsubscribe'))->with('success', 'Permohonan berhenti berlangganan paket anda berhasil');
        } catch (\Exception $th) {
            echo "Error : " . $th;
            return redirect()->to(base_url('user/unsubscribe'))->with('failed', 'Permohonan berhenti berlangganan paket anda gagal');
        }
    }
}
