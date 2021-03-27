<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id_pengeluaran';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_pengeluaran', 'jumlah', 'id_sumber'];

    public function getPengeluaran()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM pengeluaran ORDER BY id_pengeluaran DESC");
        $results = $query->getResultArray();

        return $results;
    }

    public function getPengeluaranHariIni()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE DAY(tgl_pengeluaran) = DAY(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPengeluranBulanIni()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = MONTH(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPengeluaranTahunIni()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE YEAR(tgl_pengeluaran) = YEAR(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getSeluruhPengeluaran()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT SUM(jumlah) as total FROM pengeluaran");
        $row = $query->getRow();

        return $row->total;
    }
}
