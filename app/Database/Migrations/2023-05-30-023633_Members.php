<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Members extends Migration
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
                'constraint' => ['new','active','inactive'],
            ],
            'user_id' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('members');
    }

    public function down()
    {
        $this->forge->dropTable('members');
    }
}
