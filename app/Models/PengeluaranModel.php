<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table            = 'pengeluaran';
    protected $primaryKey       = 'id_pengeluaran';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['tgl_pengeluaran', 'jumlah', 'sumber'];

    public function getPengeluaran()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT * FROM pengeluaran ORDER BY id_pengeluaran DESC");
        $results    = $query->getResultArray();

        return $results;
    }

    public function getPengeluaranHariIni()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE tgl_pengeluaran = CURDATE()");
        $row        = $query->getRow();

        return $row->total;
    }

    public function getPengeluaranBulanIni()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = MONTH(CURDATE()) && YEAR(tgl_pengeluaran) = YEAR(CURDATE())");
        $row        = $query->getRow();

        return $row->total;
    }

    public function getPengeluaranTahunIni()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT SUM(jumlah) as total FROM pengeluaran WHERE YEAR(tgl_pengeluaran) = YEAR(CURDATE())");
        $row        = $query->getRow();

        return $row->total;
    }

    public function getSeluruhPengeluaran()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT SUM(jumlah) as total FROM pengeluaran");
        $row        = $query->getRow();

        return $row->total;
    }

    public function getPengeluaranPerBulan()
    {
        $this->db   = db_connect();
        $tahun      = @$_POST['tahun'];
        $tahun      = ($tahun ? $tahun : date('Y'));
        $sql        = "SELECT SUM(jumlah) as total, '01' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '01' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '02' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '02' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '03' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '03' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '04' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '04' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '05' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '05' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '06' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '06' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '07' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '07' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '08' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '08' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '09' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '09' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '10' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '10' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '11' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '11' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '12' as bulan FROM pengeluaran WHERE MONTH(tgl_pengeluaran) = '12' AND YEAR(tgl_pengeluaran) = '" . $tahun . "'
                    ";
        $query      = $this->db->query($sql);
        $results    = $query->getResultArray();

        return $results;
    }
}
