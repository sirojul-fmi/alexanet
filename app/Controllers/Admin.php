<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $db = db_connect();
        
        $result = $db->query("SELECT count(id) AS pesan FROM pemesanan WHERE status='pending'");
        $upgrade = $db->query("SELECT count(id) as pesan FROM messages WHERE jenis_pesan='upgrade' AND status='unread'");
        $stop = $db->query("SELECT count(id) as pesan FROM messages WHERE jenis_pesan='unsubscribe' AND status='unread'");
        $member = $db->query("SELECT count(id) AS member FROM members");
        $paket = $db->query("SELECT count(id) AS paket FROM packets");

        $data['pasang'] = $result->getResultArray();
        $data['upgrade'] = $upgrade->getResultArray();
        $data['stop'] = $stop->getResultArray();
        $data['member'] = $member->getResultArray();
        $data['paket'] = $paket->getResultArray();

        return view('admin/index.php', $data);
    }

    public function dashboard()
    {
        return view('layout/admin_layout.php');
    }

    public function layout()
    {
        return view('layout/admin_layout.php');
    }
}
