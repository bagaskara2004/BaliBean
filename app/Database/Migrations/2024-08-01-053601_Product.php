<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_product' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'id_categoryProduct' => [
                'type'           => 'INT',
            ],
            'id_shop' => [
                'type'           => 'INT',
            ],
            'name_product' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'description_product' => [
                'type'       => 'VARCHAR',
                'constraint' => '1000',
            ],
            'photo_product' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'price_product' => [
                'type'       => 'INT',
            ],
            'recomended' => [
                'type'       => 'BOOLEAN',
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
        $this->forge->addKey('id_product', true);
        $this->forge->addForeignKey('id_shop', 'shop', 'id_shop');
        $this->forge->addForeignKey('id_categoryProduct', 'categoryProduct', 'id_categoryProduct');
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
