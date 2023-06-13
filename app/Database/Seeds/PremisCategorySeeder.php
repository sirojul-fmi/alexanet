<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PremisCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['category_code' => 'C1', 'category' => 'Lokasi',],
            ['category_code' => 'C2', 'category' => 'Perangkat',],
            ['category_code' => 'C3', 'category' => 'Luas Jaringan 1',],
            ['category_code' => 'C4', 'category' => 'Luas Jaringan 2',],
        ];

        $this->db->table('premis_category')->insertBatch($data);
    }
}
