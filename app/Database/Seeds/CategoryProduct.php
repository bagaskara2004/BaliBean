<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoryProduct extends Seeder
{
    public function run()
    {
        $categoryProductModel = new \App\Models\CategoryProduct();
        $data = [
            [
                'name_categoryProduct' => 'Arabika'
            ],
            [
                'name_categoryProduct' => 'Robusta'
            ],
            [
                'name_categoryProduct' => 'Liberica'
            ],
        ];
        foreach ($data as $category) {
            $categoryProductModel->addCategoryProduct($category);
        }
    }
}
