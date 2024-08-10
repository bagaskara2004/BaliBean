<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductUser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => $this->title,
            'dataShop' => $this->shopModel->getShopById(1),
            'dataCategoryProduct' => $this->categoryProductModel->getAllCategoryProduct(),
            'dataProduct' => $this->productModel->getAllProduct(),
            'media' => $this->mediaModel->getAllMedia()
        ];
        return view('User/product.php',$data);
    }
}
