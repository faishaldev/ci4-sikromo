<?php

namespace App\Models;

use CodeIgniter\Model;

class SumberPemasukanModel extends Model
{
    protected $table = 'sumber_pemasukan';
    protected $primaryKey = 'id_sumber';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama'];
}
