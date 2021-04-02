<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id_karyawan';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['nama', 'umur', 'posisi', 'kontak', 'alamat'];

    public function getKaryawan()
    {
        $db         = \Config\Database::connect();
        $query      = $this->db->query("SELECT * FROM karyawan ORDER BY id_karyawan DESC");
        $results    = $query->getResultArray();

        return $results;
    }
}
