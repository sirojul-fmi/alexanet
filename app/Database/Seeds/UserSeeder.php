<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $pass = password_hash('admin', PASSWORD_ARGON2I);
        $user = "INSERT INTO users (user_id,username,password,role) 
        VALUES ('ADM1','admin@alexanet.com', $pass, 'admin')";

        $this->db->query($user);
    }
}
