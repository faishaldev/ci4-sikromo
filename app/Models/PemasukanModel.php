<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model
{
    protected $table = 'pemasukan';
    protected $primaryKey = 'id_pemasukan';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_pemasukan', 'jumlah', 'id_sumber'];

    public function getPemasukan()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM pemasukan ORDER BY id_pemasukan DESC");
        $results = $query->getResultArray();

        return $results;
    }

    public function getPemasukanHariIni()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT jumlah FROM pemasukan WHERE tgl_pemasukan = CURDATE() ORDER BY id_pemasukan DESC");
        $row = $query->getRow();

        return $row->jumlah;
    }

    public function getPemasukanBulanIni()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE MONTH(tgl_pemasukan) = MONTH(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getPemasukanTahunIni()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE YEAR(tgl_pemasukan) = YEAR(CURDATE())");
        $row = $query->getRow();

        return $row->total;
    }

    public function getSeluruhPemasukan()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT SUM(jumlah) as total FROM pemasukan");
        $row = $query->getRow();

        return $row->total;
    }
}
