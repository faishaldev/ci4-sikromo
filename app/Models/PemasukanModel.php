<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model
{
    protected $table = 'pemasukan';
    protected $primaryKey = 'id_pemasukan';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_pemasukan', 'jumlah', 'id_sumber'];
}
