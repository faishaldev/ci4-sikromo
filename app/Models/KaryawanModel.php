<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'umur', 'posisi', 'kontak', 'alamat'];
}
