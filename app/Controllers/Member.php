<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MemberModel;
use App\Models\UserModel;

class Member extends BaseController
{
    private $member = '';
    private $user = '';

    public function __construct()
    {
        $this->member = new MemberModel();
        $this->user = new UserModel();
    }
    
    public function index()
    {
        $db = db_connect();

        $data['member'] = $db->query("SELECT members.*, packets.*, customers.*, users.* 
        FROM members, packets, customers, users 
        WHERE members.customer_id=customers.customer_id 
        AND members.packet_id=packets.packet_code 
        AND members.user_id=users.user_id")->getResultArray();

        return view('admin/member/index.php', $data);
    }

    public function add()
    {
        return view('admin/member/add.php');
    }
    
    public function store()
    {
        # code...
    }
    
    public function edit($id = null)
    {
        return view('admin/member/edit.php');
    }
    
    public function update()
    {
        # code...
    }

    public function delete($id = null)
    {
        # code...
    }

    private function randomUsername($string)
    {
        return vsprintf(
            '%s%s%d%s', [...sscanf(strtolower($string), '%s %s'), random_int(0, 1000), '@alexanet.com']
        );
    }

    public function generate()
    {
        
        $nama = $this->request->getVar('nama');
        $user_id = $this->request->getVar('user_id');
        $username = $this->randomUsername($nama);
        $password = explode('@',$username);
        $password = $password[0];

        $member = [
            'status' => 'active',
        ];

        $user = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_ARGON2I),
        ];

        try {
            $this->user->updateData('user_id', $user_id, $user);
            $this->member->updateData('user_id', $user_id,$member);

            return redirect()->to(base_url('admin/member'));
        } catch (\Exception $th) {
            echo $th;
        }
    }

    public function test()
    {
        $pass = 'falahandika319@alexanet.com';
        $passmd5 = password_hash($pass,PASSWORD_ARGON2I);
        echo '<br>' . $passmd5;
       if (password_verify($pass,$passmd5)) {
         echo 'true';
       }else{
        echo 'false';
       }
    }

}
