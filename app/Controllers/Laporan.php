<?php

namespace App\Controllers;

use DateTime, DateInterval, DatePeriod;
use Dompdf\Dompdf, Dompdf\Options;

class Laporan extends BaseController
{
    public function getData()
    {
        $begin  = new DateTime(@$_GET['mulai_tanggal']);
        $end    = new DateTime(@$_GET['sampai_tanggal']);
        $end->setTime(0, 0, 1);

        $interval   = new DateInterval('P1D');
        $daterange  = new DatePeriod($begin, $interval, $end);

        $income     = array();
        foreach ($daterange as $dr  => $value) :
            $row_data       = array();

            $row_data['tanggal']            = $value->format('d/m/Y');
            $row_data['total_pemasukan']    = $this->pemasukanModel->getPemasukanSummaryByTanggal($value->format('Y-m-d'));
            $row_data['total_pengeluaran']  = $this->pengeluaranModel->getPengeluaranSummaryByTanggal($value->format('Y-m-d'));

            $income[] = $row_data;
        endforeach;

        $data = [
            'currentMenu'               => 'laporan',
            'title'                     => 'Sikromo - Laporan',

            'income'                    => $income,

            'pemasukanPerBulan'         => $this->pemasukanModel->getPemasukanPerBulan(),
            'pemasukanPerTahun'         => $this->pemasukanModel->getPemasukanPerTahun(),

            'totalPemasukanPerRange'    => $this->pemasukanModel->getTotalPemasukanPerRange(),

            'pengeluaranPerBulan'       => $this->pengeluaranModel->getPengeluaranPerBulan(),
            'pengeluaranPerTahun'       => $this->pengeluaranModel->getPengeluaranPerTahun(),

            'totalPengeluaranPerRange'  => $this->pengeluaranModel->getTotalPengeluaranPerRange()
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
        $data = $this->getData();

        $view = view('laporan/exportLaporan', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);

        $dompdf->setPaper('A4', 'potrait');

        $dompdf->render();

        date_default_timezone_set("Asia/Bangkok");
        $dompdf->stream(date("d-m-Y") . ' ' . "Income Statement CV Romo.pdf");
    }

    public function print()
    {
        $data = $this->getData();

        $view = view('laporan/exportLaporan', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);

        $dompdf->setPaper('A4', 'potrait');

        $dompdf->render();

        // Output the generated PDF to Browser
        date_default_timezone_set("Asia/Bangkok");
        $dompdf->stream(date("d-m-Y") . ' ' . "Income Statement CV Romo.pdf", array("Attachment" => 0));
    }
}
