<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Shop extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_shop' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'telp' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'maps' => [
                'type'       => 'TEXT',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'gallery' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'open' => [
                'type'       => 'TIME',
            ],
            'close' => [
                'type'       => 'TIME',
            ],
        ]);
        $this->forge->addKey('id_shop', true);
        $this->forge->createTable('shop');
    }

    public function down()
    {
        $this->forge->dropTable('shop');
    }
}
