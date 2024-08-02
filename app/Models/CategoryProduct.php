<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryProduct extends Model
{
    protected $table            = 'categoryProduct';
    protected $primaryKey       = 'id_categoryProduct';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name_categoryProduct'];

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

    public function getAllCategoryProduct($orderBy = 'ASC')
    {
        $datas = $this->orderBy('categoryproduct.id_categoryProduct', $orderBy)->findAll();

        if (!$datas) {
            return [
                'status' => false,
                'msg' => 'CategoryProduct Tidak Ditemukan'
            ];
        }
        $results = [];
        foreach ($datas as $data) {
            $results[] = $this->decryptDataCategoryProduct($data);
        }
        return [
            'status' => true,
            'msg' => 'CategoryProduct Ditemukan',
            'data' => $results
        ];
    }

    public function getCategoryProductById($id = 0)
    {
        $data = $this->find($id);
        if (!$data) {
            return [
                'status' => false,
                'msg' => 'CategoryProduct ID ' . $id . ' Tidak Ditemukan'
            ];
        }
        return [
            'status' => true,
            'msg' => 'CategoryProduct ID ' . $id . ' Ditemukan',
            'data' => $this->decryptDataCategoryProduct($data)
        ];
    }

    public function addCategoryProduct($datas)
    {
        $data = $this->encryptDataCategoryProduct($datas);
        if ($this->save($data)) {
            return [
                'status' => true,
                'msg' => 'CategoryProduct Berhasil Ditambah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'CategoryProduct Gagal Ditambah'
            ];
        }
    }

    public function updateCategoryProduct($id = 0, $datas)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID CategoryProduct tidak ditemukan'
            ];
        }

        $data = $this->encryptDataCategoryProduct($datas);
        if ($this->update($id, $data)) {
            return [
                'status' => true,
                'msg' => 'CategoryProduct Berhasil Diubah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'CategoryProduct Gagal Diubah'
            ];
        }
    }

    public function deleteCategoryProduct($id)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID CategoryProduct tidak ditemukan'
            ];
        } else if ($this->delete($id)) {
            return [
                'status' => true,
                'msg' => 'CategoryProduct Berhasil Dihapus'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'CategoryProduct Gagal Dihapus'
            ];
        }
    }

    private function decryptDataCategoryProduct($data)
    {
        return [
            'id_categoryProduct' => $data['id_categoryProduct'],
            'name_categoryProduct' => $this->encrypter->decrypt($data['name_categoryProduct']),
            'created_at' => $data['created_at'],
        ];
    }
    private function encryptDataCategoryProduct($data)
    {
        return [
            'name_categoryProduct' => $this->encrypter->encrypt($data['name_categoryProduct']),
        ];
    }
}
