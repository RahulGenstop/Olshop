<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'tb_pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_pengguna', 'tanggal_pesanan', 'status', 'total_harga'];
}
