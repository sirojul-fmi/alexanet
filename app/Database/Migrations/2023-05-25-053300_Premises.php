<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Premis extends Migration
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
            'premis_code' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'unique' => true,
            ],
            'premis' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'category_code' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('premises');
    }

    public function down()
    {
        $this->forge->dropTable('premises');
    }
}
