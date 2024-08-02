<?php

namespace App\Models;

use CodeIgniter\Model;

class Media extends Model
{
    protected $table            = 'media';
    protected $primaryKey       = 'id_media';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['id_shop', 'name_media', 'link_media'];

    //libraries
    protected $encrypter;

    public function __construct()
    {
        parent::__construct();
        $this->encrypter = \Config\Services::encrypter();
    }

    public function getAllMedia($orderBy = 'ASC')
    {
        $datas = $this->orderBy('media.id_media', $orderBy)->findAll();

        if (!$datas) {
            return [
                'status' => false,
                'msg' => 'Media Tidak Ditemukan'
            ];
        }
        $results = [];
        foreach ($datas as $data) {
            $results[] = $this->decryptDataMedia($data);
        }
        return [
            'status' => true,
            'msg' => 'Media Ditemukan',
            'data' => $results
        ];
    }

    public function getMediaById($id = 0)
    {
        $data = $this->find($id);
        if (!$data) {
            return [
                'status' => false,
                'msg' => 'Media ID ' . $id . ' Tidak Ditemukan'
            ];
        }
        return [
            'status' => true,
            'msg' => 'Media ID ' . $id . ' Ditemukan',
            'data' => $this->decryptDataMedia($data)
        ];
    }

    public function addMedia($datas)
    {
        $data = $this->encryptDataMedia($datas);
        if ($this->save($data)) {
            return [
                'status' => true,
                'msg' => 'Media Berhasil Ditambah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Media Gagal Ditambah'
            ];
        }
    }

    public function updateMedia($id = 0, $datas)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID Media tidak ditemukan'
            ];
        }

        $data = $this->encryptDataMedia($datas);
        if ($this->update($id, $data)) {
            return [
                'status' => true,
                'msg' => 'Media Berhasil Diubah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Media Gagal Diubah'
            ];
        }
    }

    public function deleteMedia($id)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID Media tidak ditemukan'
            ];
        } else if ($this->delete($id)) {
            return [
                'status' => true,
                'msg' => 'Media Berhasil Dihapus'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Media Gagal Dihapus'
            ];
        }
    }

    private function decryptDataMedia($data)
    {
        return [
            'id_media' => $data['id_media'],
            'name_media' => $this->encrypter->decrypt($data['name_media']),
            'link_media' => $this->encrypter->decrypt($data['link_media'])
        ];
    }
    
    private function encryptDataMedia($data)
    {
        return [
            'id_shop' => $data['id_shop'],
            'name_media' => $this->encrypter->encrypt($data['name_media']),
            'link_media' => $this->encrypter->encrypt($data['link_media'])
        ];
    }

}
