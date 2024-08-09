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
            'navbar' => '<a href="/" class="nav-item nav-link">Home</a><a href="/about" class="nav-item nav-link">About</a><a href="/product" class="nav-item nav-link active">Product</a><a href="/gallery" class="nav-item nav-link">Gallery</a>',
            'dataShop' => $this->shopModel->getShopById(1),
            'dataCategoryProduct' => $this->categoryProductModel->getAllCategoryProduct(),
            'dataProduct' => $this->productModel->getAllProduct(),
            'media' => $this->mediaModel->getAllMedia()
        ];
        return view('User/product.php',$data);
    }
}
