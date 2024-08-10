<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AboutUser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => $this->title,
            'navbar' => '',
            'dataShop' => $this->shopModel->getShopById(1),
            'media' => $this->mediaModel->getAllMedia(),
            'totalProduct' => $this->productModel->countAllResults(),
            'totalVariant' => $this->categoryProductModel->countAllResults(),
        ];
        return view('User/about.php',$data);
    }

}
