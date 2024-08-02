<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $userModel = new \App\Models\User();
        $data = [
            [
                'id_shop' => 1,
                'email' => 'bagaskara@gmail.com',
                'name' => 'bagaskara',
                'comment' => 'aku sangat suka coffee disini karena sangat gurih',
                'post' => True,
            ],
            [
                'id_shop' => 1,
                'email' => 'joko@gmail.com',
                'name' => 'joko',
                'comment' => 'coffee nya gurih dengan aroma yang khas, aku sukla sekali dengan coffee disini',
                'post' => True,
            ],
            [
                'id_shop' => 1,
                'email' => 'koko@gmail.com',
                'name' => 'koko',
                'comment' => 'coffenya nyaman di lambung , rasanya mantap sekali',
                'post' => True,
            ],
            [
                'id_shop' => 1,
                'email' => 'daus@gmail.com',
                'name' => 'daus',
                'comment' => 'suka banget dengan kopi yang ada disini, pelayanannya juga ramah dan cepat',
                'post' => True,
            ],
            [
                'id_shop' => 1,
                'email' => 'jawir@gmail.com',
                'name' => 'jawir',
                'comment' => 'kopinya b aja , pelayannya juga kurang cepat, bikin ngantuk',
                'post' => False,
            ],
            [
                'id_shop' => 1,
                'email' => 'broman@gmail.com',
                'name' => 'broman',
                'comment' => 'aku sangat suka coffee disini karena sangat gurih',
                'post' => false,
            ],
            [
                'id_shop' => 1,
                'email' => 'doli@gmail.com',
                'name' => 'doli',
                'comment' => 'coffee nya gurih dengan aroma yang khas, aku sukla sekali dengan coffee disini',
                'post' => false,
            ],
            [
                'id_shop' => 1,
                'email' => 'dono@gmail.com',
                'name' => 'dono',
                'comment' => 'coffenya nyaman di lambung , rasanya mantap sekali',
                'post' => false,
            ],
            [
                'id_shop' => 1,
                'email' => 'polo@gmail.com',
                'name' => 'polo',
                'comment' => 'suka banget dengan kopi yang ada disini, pelayanannya juga ramah dan cepat',
                'post' => false,
            ],
            [
                'id_shop' => 1,
                'email' => 'grotu@gmail.com',
                'name' => 'grotu',
                'comment' => 'kopinya b aja , pelayannya juga kurang cepat, bikin ngantuk',
                'post' => False,
            ],
        ];
        
        foreach ($data as $user) {
            $userModel->addUser($user);
        }
    }
}
