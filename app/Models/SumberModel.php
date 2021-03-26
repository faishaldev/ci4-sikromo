<?php

namespace App\Models;

use CodeIgniter\Model;

class SumberModel extends Model
{
    protected $table = 'sumber';
    protected $primaryKey = 'id_sumber';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama'];
}
