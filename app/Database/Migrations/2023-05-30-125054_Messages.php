<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Messages extends Migration
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
            'member_id' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'jenis_pesan' => [
                'type' => 'ENUM',
                'constraint' => ['upgrade','unsubscribe'],
            ],
            'keterangan' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['read','unread'],
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ]
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('messages');
    }

    public function down()
    {
        $this->forge->dropTable('messages');
    }
}
