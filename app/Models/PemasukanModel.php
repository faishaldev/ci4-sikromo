<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model
{
    protected $table            = 'pemasukan';
    protected $primaryKey       = 'id_pemasukan';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['tgl_pemasukan', 'jumlah', 'sumber'];

    public function getPemasukan()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT * FROM pemasukan ORDER BY id_pemasukan DESC");
        $results    = $query->getResultArray();

        return $results;
    }

    public function getPemasukanHariIni()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE tgl_pemasukan = CURDATE()");
        $row        = $query->getRow();

        return $row->total;
    }

    public function getPemasukanBulanIni()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE MONTH(tgl_pemasukan) = MONTH(CURDATE()) && YEAR(tgl_pemasukan) = YEAR(CURDATE())");
        $row        = $query->getRow();

        return $row->total;
    }

    public function getPemasukanTahunIni()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan WHERE YEAR(tgl_pemasukan) = YEAR(CURDATE())");
        $row        = $query->getRow();

        return $row->total;
    }

    public function getSeluruhPemasukan()
    {
        $this->db   = db_connect();
        $query      = $this->db->query("SELECT SUM(jumlah) as total FROM pemasukan");
        $row        = $query->getRow();

        return $row->total;
    }

    public function getPemasukanPerBulan()
    {
        $this->db   = db_connect();
        $tahun_sekarang = date('Y');
        $tahun_session  = @$_SESSION['tahunBar'];
        $tahun_post     = @$_POST['tahunBar'];

        if ($tahun_post) {
            $tahun_filter = $tahun_post;
            $_SESSION['tahunBar'] = $tahun_post;
        } else if ($tahun_session) {
            $tahun_filter = $tahun_session;
        } else {
            $tahun_filter = $tahun_sekarang;
        }


        $sql        = "SELECT SUM(jumlah) as total, '01' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '01' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '02' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '02' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '03' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '03' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '04' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '04' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '05' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '05' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '06' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '06' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '07' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '07' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '08' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '08' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '09' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '09' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '10' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '10' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '11' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '11' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    UNION ALL
                    SELECT SUM(jumlah) as total, '12' as bulan FROM pemasukan WHERE MONTH(tgl_pemasukan) = '12' AND YEAR(tgl_pemasukan) = '" . $tahun_filter . "'
                    ";
        $query      = $this->db->query($sql);
        $results    = $query->getResultArray();

        return $results;
    }

    public function getPemasukanPerTahun()
    {
        $this->db       = db_connect();
        $tahun_sekarang = date('Y');
        $tahun_session  = @$_SESSION['tahunDoughnut'];
        $tahun_post     = @$_POST['tahunDoughnut'];

        if ($tahun_post) {
            $tahun_filter = $tahun_post;
            $_SESSION['tahunDoughnut'] = $tahun_post;
        } else if ($tahun_session) {
            $tahun_filter = $tahun_session;
        } else {
            $tahun_filter = $tahun_sekarang;
        }

        $sql        = "SELECT SUM(jumlah) as total FROM pemasukan WHERE YEAR(tgl_pemasukan) = '" . $tahun_filter . "'";
        $query      = $this->db->query($sql);
        $results    = $query->getRow();

        return $results->total;
    }
}
