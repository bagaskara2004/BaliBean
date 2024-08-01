<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Promotion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_promotion' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'id_shop' => [
                'type'           => 'INT',
            ],
            'title_promotion' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'description_promotion' => [
                'type'       => 'VARCHAR',
                'constraint' => '1000',
            ],
            'photo_promotion' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'start_date' => [
                'type'       => 'DATETIME',
            ],
            'end_date' => [
                'type'       => 'DATETIME',
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
        $this->forge->addKey('id_promotion', true);
        $this->forge->addForeignKey('id_shop', 'shop', 'id_shop');
        $this->forge->createTable('promotion');
    }

    public function down()
    {
        $this->forge->dropTable('promotion');
    }
}
