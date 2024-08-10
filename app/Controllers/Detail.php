<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Detail extends BaseController
{
    public function product($id)
    {
        $data = [
            'title' => $this->title,
            'dataShop' => $this->shopModel->getShopById($this->idShop),
            'dataProduct' => $this->productModel->getProductById($id),
            'media' => $this->mediaModel->getAllMedia(),
        ];
        return view('User/detailProduct', $data);
    }

    public function promotion($id)
    {
        $data = [
            'title' => $this->title,
            'dataShop' => $this->shopModel->getShopById($this->idShop),
            'dataPromotion' => $this->promotionModel->getPromotionById($id),
            'media' => $this->mediaModel->getAllMedia(),
        ];
        return view('User/detailPromotion', $data);
    }
}
