<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'invoice' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'customer_id' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'packet_id' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['finish','pending','cancel'],
            ],
            'keterangan' => [
                'type' => 'TEXT', 
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ]
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}
