<?php

namespace App\Models;

use CodeIgniter\Model;

class item_pesananModel extends Model
{
    protected $table = 'tb_item_pesanan';
    protected $primaryKey = 'id_item_pesanan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['jumlah', 'harga'];
}
