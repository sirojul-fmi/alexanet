<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MemberModel;
use App\Models\UserModel;

class Auth extends BaseController
{
    private $user = '';
    private $member = '';

    public function __construct()
    {
        $this->user = new UserModel();
        $this->member = new MemberModel();
    }

    public function index()
    {
        return view('auth/login.php');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    public function login()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->user->where('username',$username)->first();
        $member = $this->member->findDataBy('user_id', $user['user_id']);

        // var_dump($member[0]['status']);

        if ($user)
        {
            if (password_verify($password, $user['password'])) 
            {
                $data_login = [
                    'user_id' => $user['user_id'],
                    'username' => $user['username'],
                    'isLoggedIn' => TRUE,
                ];

                $session->set($data_login);

                if ($user['role'] == 'admin') 
                {
                    return redirect()->to(base_url('admin/dashboard'))->with('login_success','Login sukses');
                }
                else 
                {
                    if ($member[0]['status'] == 'active') {
                        return redirect()->to(base_url('user/dashboard'))->with('login_success','Login sukses');
                    }
                    else if ($member[0]['status'] == 'new') {
                        return redirect()->back()->with('user_error', 'Login gagal, pengguna belum dikonfirmasi oleh admin');
                    }
                    else
                    {
                        return redirect()->back()->with('user_error', 'Login gagal, pengguna sudah tidak aktif');
                    }
                }
            }
            else
            {
                return redirect()->back()->with('pass_error', 'Password salah');
            }
        } 
        else 
        {
            return redirect()->back()->with('user_error', 'Username tidak sesuai');
        }

    }
}
