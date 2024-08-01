<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Media extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_media' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'id_shop' => [
                'type'           => 'INT',
            ],
            'name_media' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'link_media' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ]
        ]);
        $this->forge->addKey('id_media', true);
        $this->forge->addForeignKey('id_shop', 'shop', 'id_shop');
        $this->forge->createTable('media');
    }

    public function down()
    {
        $this->forge->dropTable('media');
    }
}
