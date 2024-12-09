<?php

namespace App\Models;

use CodeIgniter\Model;

class pembayaranModel extends Model
{
    protected $table = 'tb_pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['tanggal_pembayaran', 'jumlah', 'metode_pembayaran', 'status'];
}
