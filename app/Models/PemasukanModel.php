<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model
{
    protected $table = 'pemasukan';
    protected $primaryKey = 'id_pemasukan';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_pemasukan', 'jumlah', 'id_sumber'];

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getPemasukan()
    {
        $query = $this->db->query("SELECT * FROM pemasukan ORDER BY id_pemasukan DESC");
        $results = $query->getResultArray();

        return $results;
    }

    public function getPemasukanHariIni()
    {
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE DAY(tgl_pemasukan) = DAY(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPemasukanBulanIni()
    {
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE MONTH(tgl_pemasukan) = MONTH(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPemasukanTahunIni()
    {
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE YEAR(tgl_pemasukan) = YEAR(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getSeluruhPemasukan()
    {
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPemasukanPerBulan()
    {
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan GROUP BY MONTH(tgl_pemasukan)");
        $row = $query->getRow();

        return $row->total;
    }
}
