<?php

namespace App\Models;

use CodeIgniter\Model;

class HutangModel extends Model
{
    protected $table            = 'hutang';
    protected $primaryKey       = 'id_hutang';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['tgl_hutang', 'penghutang', 'jumlah', 'alasan'];

    public function getHutang()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT * FROM hutang ORDER BY id_hutang DESC");
        $results    = $query->getResultArray();

        return $results;
    }
}
