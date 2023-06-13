<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Packets extends Migration
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
            'packet_code' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'unique' => true,
            ],
            'packet' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'bandwidth' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('packets');
    }

    public function down()
    {
        $this->forge->dropTable('packets');
    }
}
