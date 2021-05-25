<?php

namespace App\Controllers;

use DateTime, DateInterval, DatePeriod;
use Dompdf\Dompdf, Dompdf\Options;

class Laporan extends BaseController
{
    public function getData()
    {
        // asumsi tipe periode dari select box (harian atau bulanan)
        $filter_tipe = @$_GET['periode'];
        $income = array();

        $total_pemasukan = 0;
        $total_pengeluaran = 0;
        $total_saldo = 0;

        if ($filter_tipe == 'harian') {
            unset($_GET['mulai_bulan']);
            unset($_GET['sampai_bulan']);

            $begin = new DateTime(@$_GET['mulai_tanggal']);
            $end = new DateTime(@$_GET['sampai_tanggal']);
            $end->setTime(0, 0, 1);

            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($begin, $interval, $end);

            $income = array();
            foreach ($daterange as $dr => $value) :
                $row_data = array();

                $row_tanggal = $value->format('d/m/Y');
                $row_total_pemasukan = $this->pemasukanModel->getPemasukanSummaryByTanggal($value->format('Y-m-d'));
                $row_total_pengeluaran = $this->pengeluaranModel->getPengeluaranSummaryByTanggal($value->format('Y-m-d'));

                $row_data['periode'] = $row_tanggal;
                $row_data['total_pemasukan'] = $row_total_pemasukan;
                $row_data['total_pengeluaran'] = $row_total_pengeluaran;

                $income[] = $row_data;

                $total_pemasukan += $row_total_pemasukan;
                $total_pengeluaran += $row_total_pengeluaran;
            endforeach;
        } else {
            unset($_GET['mulai_tanggal']);
            unset($_GET['sampai_tanggal']);

            $begin = new DateTime(@$_GET['mulai_bulan']);
            $end = new DateTime(@$_GET['sampai_bulan']);
            $end->setTime(0, 0, 1);

            $interval = new DateInterval('P1M');
            $daterange = new DatePeriod($begin, $interval, $end);

            $income = array();
            foreach ($daterange as $dr => $value) :
                $row_data = array();

                $row_bulan = $value->format('F Y');
                $row_total_pemasukan = $this->pemasukanModel->getPemasukanSummaryByBulan($value->format('m'), $value->format('Y'));
                $row_total_pengeluaran = $this->pengeluaranModel->getPengeluaranSummaryByBulan($value->format('m'), $value->format('Y'));

                $row_data['periode'] = $row_bulan;
                $row_data['total_pemasukan'] = $row_total_pemasukan;
                $row_data['total_pengeluaran'] = $row_total_pengeluaran;

                $income[] = $row_data;

                $total_pemasukan += $row_total_pemasukan;
                $total_pengeluaran += $row_total_pengeluaran;

            endforeach;
        }

        // hitung total saldo
        $total_saldo = $total_pemasukan - $total_pengeluaran;

        $data = [
            'currentMenu'               => 'laporan',
            'title'                     => 'Sikromo - Laporan',

            'income'                    => $income,

            'total_pemasukan'           => $total_pemasukan,
            'total_pengeluaran'         => $total_pengeluaran,
            'total_saldo'               => $total_saldo,

            'pemasukanPerBulan'         => $this->pemasukanModel->getPemasukanPerBulan(),
            'pemasukanPerTahun'         => $this->pemasukanModel->getPemasukanPerTahun(),

            'pengeluaranPerBulan'       => $this->pengeluaranModel->getPengeluaranPerBulan(),
            'pengeluaranPerTahun'       => $this->pengeluaranModel->getPengeluaranPerTahun()
        ];

        return $data;
    }

    public function index()
    {
        $data = $this->getData();

        return view('laporan/index', $data);
    }

    public function export()
    {
        $data   = $this->getData();
        $view   = view('laporan/exportLaporan', $data);
        $dompdf = new Dompdf();

        $dompdf->loadHtml($view);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();

        date_default_timezone_set("Asia/Bangkok");

        $dompdf->stream(date("d-m-Y") . ' ' . "Income Statement CV Romo.pdf");
    }

    public function print()
    {
        $data   = $this->getData();
        $view   = view('laporan/exportLaporan', $data);
        $dompdf = new Dompdf();

        $dompdf->loadHtml($view);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();

        date_default_timezone_set("Asia/Bangkok");

        $dompdf->stream(date("d-m-Y") . ' ' . "Income Statement CV Romo.pdf", array("Attachment" => 0));
    }
}
