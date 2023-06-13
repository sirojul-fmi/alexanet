<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PacketSeeder extends Seeder
{
    public function run()
    {
        $packets = array(
            array('id' => '1','packet_code' => 'R1','packet' => 'Paket A','bandwidth' => '2mbps','price' => '100000'),
            array('id' => '2','packet_code' => 'R2','packet' => 'Paket B','bandwidth' => '5mbps','price' => '150000'),
            array('id' => '3','packet_code' => 'R3','packet' => 'Paket C','bandwidth' => '10mbps','price' => '200000'),
            array('id' => '5','packet_code' => 'R4','packet' => 'Paket D','bandwidth' => '20+mbps','price' => '250000')
          );

        $this->db->table('packets')->insertBatch($packets);
    }
}
