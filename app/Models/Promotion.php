<?php

namespace App\Models;

use CodeIgniter\Model;

class Promotion extends Model
{
    protected $table            = 'promotion';
    protected $primaryKey       = 'id_promotion';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_shop', 'title_promotion', 'description_promotion', 'photo_promotion', 'start_date', 'end_date'];

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
        date_default_timezone_set('Asia/Makassar');
        $this->deleteExpiredPromotions();
    }

    public function getAllPromotion($orderBy = 'ASC')
    {
        $datas = $this->orderBy('promotion.id_promotion', $orderBy)->findAll();

        if (!$datas) {
            return [
                'status' => false,
                'msg' => 'Promotion Tidak Ditemukan'
            ];
        }
        $results = [];
        foreach ($datas as $data) {
            $results[] = $this->decryptDataPromotion($data);
        }
        return [
            'status' => true,
            'msg' => 'Promotion Ditemukan',
            'data' => $results
        ];
    }

    public function getPromotionById($id = 0)
    {
        $data = $this->find($id);
        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Promotion ID ' . $id . ' Tidak Ditemukan');
        }
        return $this->decryptDataPromotion($data);
    }

    public function addPromotion($datas)
    {
        $data = $this->encryptDataPromotion($datas);
        if ($this->save($data)) {
            return [
                'status' => true,
                'msg' => 'Promotion Berhasil Ditambah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Promotion Gagal Ditambah'
            ];
        }
    }

    public function updatePromotion($id = 0, $datas)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID Promotion tidak ditemukan'
            ];
        }

        $data = $this->encryptDataPromotion($datas);
        if ($this->update($id, $data)) {
            return [
                'status' => true,
                'msg' => 'Promotion Berhasil Diubah'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Promotion Gagal Diubah'
            ];
        }
    }

    public function deletePromotion($id)
    {
        if (!$this->find($id)) {
            return [
                'status' => false,
                'msg'    => 'ID Promotion tidak ditemukan'
            ];
        } else if ($this->delete($id)) {
            return [
                'status' => true,
                'msg' => 'Promotion Berhasil Dihapus'
            ];
        } else {
            return [
                'status' => false,
                'msg' => 'Promotion Gagal Dihapus'
            ];
        }
    }

    private function deleteExpiredPromotions() {
        return $this->where('end_date <', date('Y-m-d H:i:s'))->delete();
    }

    private function decryptDataPromotion($data)
    {
        return [
            'id_promotion' => $data['id_promotion'],
            'title_promotion' => $this->encrypter->decrypt($data['title_promotion']),
            'description_promotion' => $this->encrypter->decrypt($data['description_promotion']),
            'photo_promotion' => $this->encrypter->decrypt($data['photo_promotion']),
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
        ];
    }
    private function encryptDataPromotion($data)
    {
        return [
            'id_shop' => $data['id_shop'],
            'title_promotion' => $this->encrypter->encrypt($data['title_promotion']),
            'description_promotion' => $this->encrypter->encrypt($data['description_promotion']),
            'photo_promotion' => $this->encrypter->encrypt($data['photo_promotion']),
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
        ];
    }
}
