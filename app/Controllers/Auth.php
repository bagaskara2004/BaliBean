<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => $this->title,
            'dataShop' => $this->shopModel->getShopById($this->idShop),
            'media' => $this->mediaModel->getAllMedia(),
        ];
        return view('Auth/login', $data);
    }

    public function login()
    {
        $input = $this->request->getVar();

        $validationRules = [
            'email' => 'required',
            'password' => 'required'
        ];

        if ($this->validate($validationRules)) {
            if ($data = $this->shopModel->getShopByEmail($input['email'])) {
                if ($data['password'] == $input['password']) {
                    $sesi = [
                        'role' => 'admin',
                        'id_shop' => $data['id_shop'],
                    ];
                    $this->session->set($sesi);
                    return redirect()->to('/dashboard');
                } else {
                    session()->setFlashdata('erorr', 'Wrong Password');
                    return redirect()->to('/login');
                }
            } else {
                session()->setFlashdata('erorr', 'Email not found');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('erorr', $this->validation->listErrors());
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}
