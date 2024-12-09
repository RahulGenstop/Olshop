<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'tb_pengguna';
    protected $primaryKey = 'id_pengguna';
    // protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_pengguna', 'kata_sandi', 'email', 'peran'];
}
