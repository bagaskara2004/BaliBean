<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Media extends Seeder
{
    public function run()
    {
        $mediaModel = new \App\Models\Media();
        $data = [
            [
                'id_shop' => 1,
                'name_media' => 'instagram',
                'link_media' => 'https://www.instagram.com/'
            ],
            [
                'id_shop' => 1,
                'name_media' => 'facebook',
                'link_media' => 'https://www.facebook.com/'
            ],
            [
                'id_shop' => 1,
                'name_media' => 'youtube',
                'link_media' => 'https://www.youtube.com/'
            ],
        ];
        foreach ($data as $media) {
            $mediaModel->addMedia($media);
        }
    }
}
