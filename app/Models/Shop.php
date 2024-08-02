<?php

namespace App\Models;

use CodeIgniter\Model;

class Shop extends Model
{
    protected $table            = 'shop';
    protected $primaryKey       = 'id_shop';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'address', 'telp', 'maps', 'password', 'gallery', 'open', 'close'];

    //libraries
    protected $encrypter;

    public function __construct()
    {
        parent::__construct();
        $this->encrypter = \Config\Services::encrypter();
    }

    public function getShopById($id = 0)
    {
        $data = $this->find($id);
        if (!$data) {
            return [
                'status' => false,
                'msg' => 'Shop ID ' . $id . ' Tidak Ditemukan'
            ];
        }
        return [
            'status' => true,
            'msg' => 'Shop ID ' . $id . ' Ditemukan',
            'data' => $this->decryptDataShop($data)
        ];
    }

    public function getShopByEmail($email = '')
    {
        $datas = $this->select('id_shop,email')->findAll();
        foreach ($datas as $data) {
            if ($this->encrypter->decrypt($data['email']) == $email) {
                return $this->getShopById($data['id_shop']);
            }
        }
        return [
            'status' => false,
            'msg' => 'Shop Tidak Ditemukan',
        ];
    }

    public function addShop($datas)
    {
        $data = $this->encryptDataShop($datas);
        if ($this->save($data)) {
            return [
                'status' => true,
                'msg' => 'Shop Berhasil Ditambah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Shop Gagal Ditambah'
            ];
        }
    }

    public function updateShop($id = 0, $datas)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID Shop tidak ditemukan'
            ];
        }

        $data = $this->encryptDataShop($datas);
        if ($this->update($id, $data)) {
            return [
                'status' => true,
                'msg' => 'Shop Berhasil Diubah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Shop Gagal Diubah'
            ];
        }
    }

    private function decryptDataShop($data)
    {
        return [
            'id_shop' => $data['id_shop'],
            'name' => $this->encrypter->decrypt($data['name']),
            'email' => $this->encrypter->decrypt($data['email']),
            'address' => $this->encrypter->decrypt($data['address']),
            'telp' => $this->encrypter->decrypt($data['telp']),
            'maps' => $data['maps'],
            'password' => $this->encrypter->decrypt($data['password']),
            'gallery' => $this->encrypter->decrypt($data['gallery']),
            'open' => $data['open'],
            'close' => $data['close'],
        ];
    }

    private function encryptDataShop($data)
    {
        return [
            'name' => $this->encrypter->encrypt($data['name']),
            'email' => $this->encrypter->encrypt($data['email']),
            'address' => $this->encrypter->encrypt($data['address']),
            'telp' => $this->encrypter->encrypt($data['telp']),
            'maps' => $data['maps'],
            'password' => $this->encrypter->encrypt($data['password']),
            'gallery' => $this->encrypter->encrypt($data['gallery']),
            'open' => $data['open'],
            'close' => $data['close'],
        ];
    }
}
