<?php

namespace App\Controllers;

class HomeUser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => $this->title,
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

    public function addUser() {
        $data = [
            'id_shop' => $this->idShop,
            'email' => strip_tags(strval($this->request->getPost('email'))),
            'name' => strip_tags(strval($this->request->getPost('name'))),
            'comment' => strip_tags(strval($this->request->getPost('comment'))),
            'post' => false
        ];
        $validationRules = [
            'name' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email',
            'comment' => 'required|min_length[5]|max_length[100]'
        ];
        if ($this->validate($validationRules)) {
            if (empty($data['name']) || empty($data['email']) || empty($data['comment'])) {
                session()->setFlashdata('erorr', 'Failed to send');
                return redirect()->to('/');
            }else if ( $this->userModel->cekUser($data['email'])) {
                session()->setFlashdata('erorr', 'Email is registered');
                return redirect()->to('/');
            }else {
                $addUser = $this->userModel->addUser($data);
                if ($addUser['status']) {
                    session()->setFlashdata('success', $addUser['msg']);
                    return redirect()->to('/');
                } else {
                    session()->setFlashdata('erorr', $addUser['msg']);
                    return redirect()->to('/');
                }
            }
        } else {
            session()->setFlashdata('erorr', $this->validation->listErrors());
            return redirect()->to('/');
        }
    }

}
