<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use DateTime;

class Promotion extends Seeder
{
    public function run()
    {
        $promotionModel = new \App\Models\Promotion();
        $encrypter = \Config\Services::encrypter();
        $data = [
            [
                'id_shop' => 1,
                'title_promotion' => $encrypter->encrypt('Promo Akhir Tahun'),
                'description_promotion' => $encrypter->encrypt('promo akhir tahun merupakan promo yang selalu diadakan menjelang tahun baru, disini kalian bisa mendapatkan diskon besar besar besaran selama tanggal yang di tentukan'),
                'photo_promotion' => $encrypter->encrypt('promo-1.jpeg'),
                'start_date' => (new DateTime('2024-11-25 14:30:00'))->format('Y-m-d H:i:s'),
                'end_date' => (new DateTime('2025-01-10 14:30:00'))->format('Y-m-d H:i:s'),
            ],
            [
                'id_shop' => 1,
                'title_promotion' => $encrypter->encrypt('Buy 1 Get 1'),
                'description_promotion' => $encrypter->encrypt('promo ini merupakan promo yang selalu diadakan setiap tahun, disini kalian bisa mendapatkan gratis 1 coffee jika kalian membeli coffee'),
                'photo_promotion' => $encrypter->encrypt('promo-2.jpg'),
                'start_date' => (new DateTime('2024-08-25 18:30:00'))->format('Y-m-d H:i:s'),
                'end_date' => (new DateTime('2024-08-26 12:30:00'))->format('Y-m-d H:i:s'),
            ],
            [
                'id_shop' => 1,
                'title_promotion' => $encrypter->encrypt('Diskon 10%'),
                'description_promotion' => $encrypter->encrypt('setiap pembelian coffee akan total harganya akan di diskon 10% dari harga aslinya'),
                'photo_promotion' => $encrypter->encrypt('promo-3.jpg'),
                'start_date' => (new DateTime('2024-07-24 18:30:00'))->format('Y-m-d H:i:s'),
                'end_date' => (new DateTime('2024-07-26 12:30:00'))->format('Y-m-d H:i:s'),
            ],
            [
                'id_shop' => 1,
                'title_promotion' => $encrypter->encrypt('Promo Natal'),
                'description_promotion' => $encrypter->encrypt('setiap pembelian coffee akan mendapatkan mistery gift yang bisa ditukarkan dengan coffee apapun'),
                'photo_promotion' => $encrypter->encrypt('promo-4.jpg'),
                'start_date' => (new DateTime('2024-09-20 18:30:00'))->format('Y-m-d H:i:s'),
                'end_date' => (new DateTime('2024-09-01 12:30:00'))->format('Y-m-d H:i:s'),
            ],
        ];
        
        foreach ($data as $promo) {
            $promotionModel->save($promo);
        }
    }
}
