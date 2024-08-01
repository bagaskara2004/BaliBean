<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $userModel = new \App\Models\User();
        $encrypter = \Config\Services::encrypter();
        $data = [
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('bagaskara@gmail.com'),
                'name' => $encrypter->encrypt('bagaskara'),
                'comment' => $encrypter->encrypt('aku sangat suka coffee disini karena sangat gurih'),
                'post' => True,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('joko@gmail.com'),
                'name' => $encrypter->encrypt('joko'),
                'comment' => $encrypter->encrypt('coffee nya gurih dengan aroma yang khas, aku sukla sekali dengan coffee disini'),
                'post' => True,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('koko@gmail.com'),
                'name' => $encrypter->encrypt('koko'),
                'comment' => $encrypter->encrypt('coffenya nyaman di lambung , rasanya mantap sekali'),
                'post' => True,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('daus@gmail.com'),
                'name' => $encrypter->encrypt('daus'),
                'comment' => $encrypter->encrypt('suka banget dengan kopi yang ada disini, pelayanannya juga ramah dan cepat'),
                'post' => True,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('jawir@gmail.com'),
                'name' => $encrypter->encrypt('jawir'),
                'comment' => $encrypter->encrypt('kopinya b aja , pelayannya juga kurang cepat, bikin ngantuk'),
                'post' => False,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('broman@gmail.com'),
                'name' => $encrypter->encrypt('broman'),
                'comment' => $encrypter->encrypt('aku sangat suka coffee disini karena sangat gurih'),
                'post' => false,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('doli@gmail.com'),
                'name' => $encrypter->encrypt('doli'),
                'comment' => $encrypter->encrypt('coffee nya gurih dengan aroma yang khas, aku sukla sekali dengan coffee disini'),
                'post' => false,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('dono@gmail.com'),
                'name' => $encrypter->encrypt('dono'),
                'comment' => $encrypter->encrypt('coffenya nyaman di lambung , rasanya mantap sekali'),
                'post' => false,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('polo@gmail.com'),
                'name' => $encrypter->encrypt('polo'),
                'comment' => $encrypter->encrypt('suka banget dengan kopi yang ada disini, pelayanannya juga ramah dan cepat'),
                'post' => false,
            ],
            [
                'id_shop' => 1,
                'email' => $encrypter->encrypt('grotu@gmail.com'),
                'name' => $encrypter->encrypt('grotu'),
                'comment' => $encrypter->encrypt('kopinya b aja , pelayannya juga kurang cepat, bikin ngantuk'),
                'post' => False,
            ],
        ];
        
        foreach ($data as $user) {
            $userModel->save($user);
        }
    }
}
