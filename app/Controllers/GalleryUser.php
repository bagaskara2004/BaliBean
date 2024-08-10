<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class GalleryUser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => $this->title,
            'dataShop' => $this->shopModel->getShopById(1),
            'media' => $this->mediaModel->getAllMedia()
        ];
        return view('User/gallery.php',$data);
    }
}
