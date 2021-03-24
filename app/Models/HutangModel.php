<?php

namespace App\Models;

use CodeIgniter\Model;

class HutangModel extends Model
{
    protected $table = 'hutang';
    protected $primaryKey = 'id_hutang';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_hutang', 'penghutang', 'jumlah', 'alasan'];
}
