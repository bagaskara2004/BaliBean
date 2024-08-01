<?php

namespace App\Models;

use CodeIgniter\Model;

class Shop extends Model
{
    protected $table            = 'shop';
    protected $primaryKey       = 'id_shop';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'address', 'telp', 'maps','password','gallery','open','close'];

    public function __construct()
    {
        parent::__construct();
    }
    
}
