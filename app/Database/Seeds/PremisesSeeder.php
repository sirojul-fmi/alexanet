<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PremisesSeeder extends Seeder
{
    public function run()
    {
        $premises = array(
            array('id' => '1','premis_code' => 'G1','premis' => 'Rumah', 'category_code' => 'C1'),
            array('id' => '2','premis_code' => 'G2','premis' => 'Warkop', 'category_code' => 'C1'),
            // array('id' => '3','premis_code' => 'G3','premis' => 'Kantor', 'category_code' => 'C1'),
            array('id' => '4','premis_code' => 'G4','premis' => 'Instansi', 'category_code' => 'C1'),
            array('id' => '5','premis_code' => 'G5','premis' => '1-3 Perangkat', 'category_code' => 'C2'),
            array('id' => '6','premis_code' => 'G6','premis' => '1-5 Perangkat', 'category_code' => 'C2'),
            array('id' => '7','premis_code' => 'G7','premis' => '1-10 Perangkat', 'category_code' => 'C2'),
            array('id' => '8','premis_code' => 'G8','premis' => '10+ Perangkat', 'category_code' => 'C2'),
            array('id' => '9','premis_code' => 'G9','premis' => '1 Lantai', 'category_code' => 'C3'),
            array('id' => '10','premis_code' => 'G10','premis' => '2 Lantai', 'category_code' => 'C3'),
            array('id' => '11','premis_code' => 'G11','premis' => '3 Lantai', 'category_code' => 'C3'),
            array('id' => '12','premis_code' => 'G12','premis' => '1 Atap', 'category_code' => 'C4'),
            array('id' => '13','premis_code' => 'G13','premis' => '2 Atap', 'category_code' => 'C4'),
            array('id' => '14','premis_code' => 'G14','premis' => '3 Atap', 'category_code' => 'C4')
          );
        
          $this->db->table('premises')->insertBatch($premises);
    }
}
