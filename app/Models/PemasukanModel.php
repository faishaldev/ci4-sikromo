<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model
{
    protected $table = 'pemasukan';
    protected $primaryKey = 'id_pemasukan';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_pemasukan', 'jumlah', 'sumber'];

    public function getPemasukan()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT * FROM pemasukan ORDER BY id_pemasukan DESC");
        $results = $query->getResultArray();

        return $results;
    }

    public function getPemasukanHariIni()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE tgl_pemasukan = CURDATE()");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPemasukanBulanIni()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE MONTH(tgl_pemasukan) = MONTH(CURDATE()) && YEAR(tgl_pemasukan) = YEAR(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPemasukanTahunIni()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE YEAR(tgl_pemasukan) = YEAR(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getSeluruhPemasukan()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPemasukanPerBulan()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) FROM pemasukan WHERE YEAR(tgl_pemasukan) = YEAR(CURDATE()) GROUP BY MONTH(tgl_pemasukan)");
        $results = $query->getResultArray();

        return $results;
    }
}
