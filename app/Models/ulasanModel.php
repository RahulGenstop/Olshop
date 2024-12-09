<?php

namespace App\Models;

use CodeIgniter\Model;

class ulasanModel extends Model
{
    protected $table = 'tb_ulasan';
    protected $primaryKey = 'id_ulasan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['rating', 'komentar', 'tanggal_dibuat'];
}
