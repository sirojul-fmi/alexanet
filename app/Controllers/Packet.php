<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PacketModel;

class Packet extends BaseController
{
    private $packet = '';

    public function __construct()
    {
        $this->packet = new PacketModel();
    }

    public function index()
    {
        $data['packet'] = $this->packet->orderBy('id', 'ASC')->findAll();
        return view('admin/packet/index.php', $data);
    }

    public function add()
    {
        return view('admin/packet/add.php');
    }

    public function store()
    {
        $data = [
            'packet_code' => ucwords($this->request->getVar('packetCode')),
            'packet' => ucwords($this->request->getVar('packetName')),
            'bandwidth' => ucwords($this->request->getVar('packetBandwidth')),
            'price' => ucwords($this->request->getVar('packetPrice')),
        ];

        try {
            $this->packet->insert($data);
            return redirect()->to(base_url('admin/packet'))->with('msg', 'Input data paket berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function edit($id = null)
    {
        $data['packet'] = $this->packet->find($id);
        return view('admin/packet/edit.php', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('packetId');
        $data = [
            'packet_code' => ucwords($this->request->getVar('packetCode')),
            'packet' => ucwords($this->request->getVar('packetName')),
            'bandwidth' => ucwords($this->request->getVar('packetBandwidth')),
            'price' => ucwords($this->request->getVar('packetPrice')),
        ];

        try {
            $this->packet->update($id, $data);
            return redirect()->to(base_url('admin/packet'))->with('msg', 'Update data paket berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function delete()
    {
        $id = $this->request->getVar('packetId');
        try {
            $this->packet->delete($id);
            return redirect()->to(base_url('admin/packet'))->with('msg', 'Hapus data paket berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
