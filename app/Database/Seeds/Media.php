<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Media extends Seeder
{
    public function run()
    {
        $mediaModel = new \App\Models\Media();
        $encrypter = \Config\Services::encrypter();
        $data = [
            [
                'id_shop' => 1,
                'name_media' => $encrypter->encrypt('instagram'),
                'link_media' => $encrypter->encrypt('https://www.instagram.com/')
            ],
            [
                'id_shop' => 1,
                'name_media' => $encrypter->encrypt('facebook'),
                'link_media' => $encrypter->encrypt('https://www.facebook.com/')
            ],
            [
                'id_shop' => 1,
                'name_media' => $encrypter->encrypt('youtube'),
                'link_media' => $encrypter->encrypt('https://www.youtube.com/')
            ],
        ];
        foreach ($data as $media) {
            $mediaModel->save($media);
        }
    }
}
