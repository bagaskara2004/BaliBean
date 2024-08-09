<?php

namespace App\Controllers;

class HomeUser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => $this->title,
            'navbar' => '<a href="/" class="nav-item nav-link active">Home</a><a href="/about" class="nav-item nav-link">About</a><a href="/product" class="nav-item nav-link">Product</a><a href="/gallery" class="nav-item nav-link">Gallery</a>',
            'dataShop' => $this->shopModel->getShopById(1),
            'recomended' => $this->productModel->getProductByRecomended(),
            'comments' => $this->userModel->getUserByPost(),
            'promotions' => $this->promotionModel->getAllPromotion(),
            'media' => $this->mediaModel->getAllMedia(),
            'totalProduct' => $this->productModel->countAllResults(),
            'totalVariant' => $this->categoryProductModel->countAllResults(),
        ];
        return view('User/home',$data);
    }

}
