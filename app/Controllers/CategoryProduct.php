<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoryProduct extends BaseController
{
    public function addCategory()
    {
        $data = [
            'name_categoryProduct' => strip_tags(strval($this->request->getPost('name'))),
        ];

        $validationRules = [
            'name' => 'required|min_length[3]|max_length[20]',
        ];

        if ($this->validate($validationRules)) {
            if (empty($data['name_categoryProduct'])) {
                session()->setFlashdata('erorr', 'Failed to add Category');
                return redirect()->to('/category');
            } else {
                $addCategory = $this->categoryProductModel->addCategoryProduct($data);
                if ($addCategory['status']) {
                    session()->setFlashdata('success', $addCategory['msg']);
                    return redirect()->to('/category');
                } else {
                    session()->setFlashdata('erorr', $addCategory['msg']);
                    return redirect()->to('/category');
                }
            }
        } else {
            session()->setFlashdata('erorr', $this->validation->listErrors());
            return redirect()->to('/category');
        }
    }

    public function editCategory()
    {
        $data = [
            'name_categoryProduct' => strip_tags(strval($this->request->getPost('name'))),
        ];

        $validationRules = [
            'name' => 'required|min_length[3]|max_length[20]',
        ];

        if ($this->validate($validationRules)) {
            if (empty($data['name_categoryProduct'])) {
                session()->setFlashdata('erorr', 'Failed to edit Category');
                return redirect()->to('/category');
            } else {
                $id = $this->request->getPost('id');
                $editCategory = $this->categoryProductModel->updateCategoryProduct($id, $data);
                if ($editCategory['status']) {
                    session()->setFlashdata('success', $editCategory['msg']);
                    return redirect()->to('/category');
                } else {
                    session()->setFlashdata('erorr', $editCategory['msg']);
                    return redirect()->to('/category');
                }
            }
        } else {
            session()->setFlashdata('erorr', $this->validation->listErrors());
            return redirect()->to('/category');
        }
    }

    public function deleteCategory($id)
    {
        $deleteCategory = $this->categoryProductModel->deleteCategoryProduct($id);
        if ($deleteCategory['status']) {
            session()->setFlashdata('success', $deleteCategory['msg']);
            return redirect()->to('/category');
        } else {
            session()->setFlashdata('erorr', $deleteCategory['msg']);
            return redirect()->to('/category');
        }
    }
}
