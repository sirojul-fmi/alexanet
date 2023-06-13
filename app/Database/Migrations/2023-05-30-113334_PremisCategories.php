<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PremisCategories extends Migration
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
            'category_code' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('premis_category');
    }

    public function down()
    {
        $this->forge->dropTable('premis_category');
    }
}
