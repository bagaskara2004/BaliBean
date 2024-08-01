<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_categoryProduct' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'name_categoryProduct' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'created_at' => [
                'type'       => 'datetime',
                'null'       => True
            ],
            'updated_at' => [
                'type'       => 'datetime',
                'null'       => True
            ],
            'deleted_at' => [
                'type'       => 'datetime',
                'null'       => True
            ],
        ]);
        $this->forge->addKey('id_categoryProduct', true);
        $this->forge->createTable('categoryProduct');
    }

    public function down()
    {
        $this->forge->dropTable('categoryProduct');
    }
}
