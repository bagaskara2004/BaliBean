<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_shop', 'email', 'name', 'comment', 'post'];

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

    public function getAllUser($orderBy = 'ASC')
    {
        $datas = $this->orderBy('user.id_user', $orderBy)->findAll();

        if (!$datas) {
            return [
                'status' => false,
                'msg' => 'User Tidak Ditemukan'
            ];
        }
        $results = [];
        foreach ($datas as $data) {
            $results[] = $this->decryptDataUser($data);
        }
        return [
            'status' => true,
            'msg' => 'User Ditemukan',
            'data' => $results
        ];
    }

    public function getUserById($id = 0)
    {
        $data = $this->find($id);
        if (!$data) {
            return [
                'status' => false,
                'msg' => 'User ID ' . $id . ' Tidak Ditemukan'
            ];
        }
        return [
            'status' => true,
            'msg' => 'User ID ' . $id . ' Ditemukan',
            'data' => $this->decryptDataUser($data)
        ];
    }

    public function addUser($datas)
    {
        $data = $this->encryptDataUser($datas);
        if ($this->save($data)) {
            return [
                'status' => true,
                'msg' => 'User Berhasil Ditambah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'User Gagal Ditambah'
            ];
        }
    }

    public function updateUser($id = 0, $datas)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID User tidak ditemukan'
            ];
        }

        $data = $this->encryptDataUser($datas);
        if ($this->update($id, $data)) {
            return [
                'status' => true,
                'msg' => 'User Berhasil Diubah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'User Gagal Diubah'
            ];
        }
    }

    public function deleteUser($id)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID User tidak ditemukan'
            ];
        } else if ($this->delete($id)) {
            return [
                'status' => true,
                'msg' => 'User Berhasil Dihapus'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'User Gagal Dihapus'
            ];
        }
    }

    private function decryptDataUser($data)
    {
        return [
            'id_user' => $data['id_user'],
            'email' => $this->encrypter->decrypt($data['email']),
            'name' => $this->encrypter->decrypt($data['name']),
            'comment' => $this->encrypter->decrypt($data['comment']),
            'post' => $data['post'],
            'created_at' => $data['created_at'],
        ];
    }

    private function encryptDataUser($data)
    {
        return [
            'id_shop' => $data['id_shop'],
            'email' => $this->encrypter->encrypt($data['email']),
            'name' => $this->encrypter->encrypt($data['name']),
            'comment' => $this->encrypter->encrypt($data['comment']),
            'post' => $data['post'],
        ];
    }

}
