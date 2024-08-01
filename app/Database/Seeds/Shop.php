<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use DateTime;

class Shop extends Seeder
{
    public function run()
    {
        $shopModel = new \App\Models\Shop();
        $encrypter = \Config\Services::encrypter();
        $data = [
            'name' => $encrypter->encrypt('balibean'),
            'email' => $encrypter->encrypt('balibean@gmail.com'),
            'address' => $encrypter->encrypt('politeknik negeri bali'),
            'telp' => $encrypter->encrypt('089555111'),
            'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.859497870158!2d115.16026357321479!3d-8.799268089959895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244c0e798b329%3A0x928f38fe0d70a8fc!2sPolteknik%20Negeri%20Bali%2C%20Jimbaran%2C%20Kec.%20Kuta%20Sel.%2C%20Kabupaten%20Badung%2C%20Bali!5e0!3m2!1sid!2sid!4v1720100132667!5m2!1sid!2sid',
            'password' => $encrypter->encrypt('12345'),
            'gallery' => $encrypter->encrypt('25442523'),
            'open' => date('H:i', strtotime('10:00')),
            'close' => date('H:i', strtotime('12:00'))
        ];
        $shopModel->save($data);
    }
}
