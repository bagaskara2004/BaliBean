<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'id_product';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_categoryProduct', 'id_shop', 'name_product', 'description_product', 'photo_product', 'price_product', 'recomended'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //libraries
    protected $encrypter;

    public function __construct()
    {
        parent::__construct();
        $this->encrypter = \Config\Services::encrypter();
    }

    public function getAllProduct($orderBy = 'ASC')
    {
        $datas = $this->join('categoryproduct', 'product.id_categoryProduct = categoryproduct.id_categoryProduct')->orderBy('product.id_product', $orderBy)->findAll();

        if (!$datas) {
            return [
                'status' => false,
                'msg' => 'Product Tidak Ditemukan'
            ];
        }
        $results = [];
        foreach ($datas as $data) {
            $results[] = $this->decryptDataProduct($data,true);
        }
        return [
            'status' => true,
            'msg' => 'Product Ditemukan',
            'data' => $results
        ];
    }

    public function getProductById($id = 0)
    {
        $data = $this->join('categoryproduct', 'product.id_categoryProduct = categoryproduct.id_categoryProduct')->find($id);
        if (!$data) {
            return [
                'status' => false,
                'msg' => 'Product ID ' . $id . ' Tidak Ditemukan'
            ];
        }
        return [
            'status' => true,
            'msg' => 'Product ID ' . $id . ' Ditemukan',
            'data' => $this->decryptDataProduct($data)
        ];
    }

    public function getProductByRecomended()
    {
        $datas = $this->join('categoryproduct', 'product.id_categoryProduct = categoryproduct.id_categoryProduct')->where('recomended', true)->findAll();
        if (!$datas) {
            return [
                'status' => false,
                'msg' => 'Product Tidak Ditemukan'
            ];
        }
        $results = [];
        foreach ($datas as $data) {
            $results[] = $this->decryptDataProduct($data,true);
        }

        return [
            'status' => true,
            'msg' => 'Product Ditemukan',
            'data' => $results
        ];
    }

    public function addProduct($datas)
    {
        $data = $this->encryptDataProduct($datas);
        if ($this->save($data)) {
            return [
                'status' => true,
                'msg' => 'Product Berhasil Ditambah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Product Gagal Ditambah'
            ];
        }
    }

    public function updateProduct($id = 0, $datas)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID Product tidak ditemukan'
            ];
        }

        $data = $this->encryptDataProduct($datas);
        if ($this->update($id, $data)) {
            return [
                'status' => true,
                'msg' => 'Product Berhasil Diubah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Product Gagal Diubah'
            ];
        }
    }

    public function deleteProduct($id)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID Product tidak ditemukan'
            ];
        } else if ($this->delete($id)) {
            return [
                'status' => true,
                'msg' => 'Product Berhasil Dihapus'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Product Gagal Dihapus'
            ];
        }
    }

    public function convertDescription($teks)
    {
        if (strlen($teks) > 100) {
            $newTeks = '';
            for ($i = 0; $i < 100; $i++) {
                $newTeks .= $teks[$i];
            }
            return $newTeks . '....';
        }
        return $teks;
    }

    private function decryptDataProduct($data,$convert = false)
    {
        if ($convert) {
            $decription = $this->convertDescription($this->encrypter->decrypt($data['description_product']));
        }else{
            $decription = $this->encrypter->decrypt($data['description_product']);
        }
        return [
            'id_product' => $data['id_product'],
            'id_categoryProduct' => $data['id_categoryProduct'],
            'name_product' => $this->encrypter->decrypt($data['name_product']),
            'description_product' => $decription,
            'photo_product' => $this->encrypter->decrypt($data['photo_product']),
            'price_product' => 'Rp.' . $data['price_product'],
            'recomended' => $data['recomended'],
            'created_at' => $data['created_at'],
            'category_product' => $this->encrypter->decrypt($data['name_categoryProduct']),
        ];
    }

    private function encryptDataProduct($data)
    {
        return [
            'id_categoryProduct' => $data['id_categoryProduct'],
            'id_shop' => $data['id_shop'],
            'name_product' => $this->encrypter->encrypt($data['name_product']),
            'description_product' => $this->encrypter->encrypt($data['description_product']),
            'photo_product' => $this->encrypter->encrypt($data['photo_product']),
            'price_product' => $data['price_product'],
            'recomended' => $data['recomended'],
        ];
    }
}
