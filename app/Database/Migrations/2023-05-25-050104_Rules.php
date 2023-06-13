<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rules extends Migration
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
            'rule1' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'rule2' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'rule3' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'rule4' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'conclusion' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('rules');
    }

    public function down()
    {
        $this->forge->dropTable('rules');
    }
}
