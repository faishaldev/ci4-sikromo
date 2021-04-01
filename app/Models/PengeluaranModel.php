<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id_pengeluaran';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_pengeluaran', 'jumlah', 'sumber'];

    public function getPengeluaran()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT * FROM pengeluaran ORDER BY id_pengeluaran DESC");
        $results = $query->getResultArray();

        return $results;
    }

    public function getPengeluaranHariIni()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE tgl_pengeluaran = CURDATE()");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPengeluaranBulanIni()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = MONTH(CURDATE()) && YEAR(tgl_pengeluaran) = YEAR(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPengeluaranTahunIni()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE YEAR(tgl_pengeluaran) = YEAR(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getSeluruhPengeluaran()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) as total FROM pengeluaran");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPengeluaranPerBulan()
    {
        $this->db = db_connect();
        $query = $this->db->query("SELECT SUM(jumlah) FROM pengeluaran GROUP BY MONTH(tgl_pengeluaran)");
        $results = $query->getResultArray();

        return $results;
    }
}
