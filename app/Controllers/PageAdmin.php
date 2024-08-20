<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PageAdmin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => $this->title,
            'totalProduct' => $this->productModel->countAllResults(),
            'totalCategoryProduct' => $this->categoryProductModel->countAllResults(),
            'totalUser' => $this->userModel->countAllResults(),
        ];
        return view('Admin/dashboard', $data);
    }
    public function categoryProduct()
    {
        $data = [
            'title' => $this->title,
            'dataCategoryProduct' => $this->categoryProductModel->getAllCategoryProduct('DESC')
        ];
        return view('Admin/categoryProduct', $data);
    }
    
    public function formCategory($id = null)
    {
        if ($id != null) {
            $data['data'] = $this->categoryProductModel->getCategoryProductById($id);
        }
        $data['title'] = $this->title;
        return view('Admin/formCategory', $data);
    }
}
