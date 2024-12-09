<?php

namespace App\Models;

use CodeIgniter\Model;

class kategoriModel extends Model
{
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id_kategori';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_kategori', 'deskripsi'];
}
