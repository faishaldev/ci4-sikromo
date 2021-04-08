<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Myth\Auth\Commands\Publish;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'currentMenu'               => 'laporan',
            'title'                     => 'Sikromo - Laporan',

            'pemasukan'                 => $this->pemasukanModel->getPemasukan(),
            'pemasukanPerBulan'         => $this->pemasukanModel->getPemasukanPerBulan(),
            'pemasukanPerTahun'         => $this->pemasukanModel->getPemasukanPerTahun(),
            'pemasukanPerRange'         => $this->pemasukanModel->getPemasukanPerRange(),
            'totalPemasukanPerRange'    => $this->pemasukanModel->getTotalPemasukanPerRange(),

            'pengeluaranPerBulan'       => $this->pengeluaranModel->getPengeluaranPerBulan(),
            'pengeluaranPerTahun'       => $this->pengeluaranModel->getPengeluaranPerTahun(),
            'pengeluaranPerRange'       => $this->pengeluaranModel->getPengeluaranPerRange(),
            'totalPengeluaranPerRange'  => $this->pengeluaranModel->getTotalPengeluaranPerRange()
        ];

        return view('laporan/index', $data);
    }
}
