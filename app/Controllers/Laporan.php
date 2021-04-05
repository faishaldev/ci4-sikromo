<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Myth\Auth\Commands\Publish;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'currentMenu'           => 'laporan',
            'title'                 => 'Sikromo - Laporan',

            'pemasukan' => $this->pemasukanModel->getPemasukan(),
            'pemasukanPerBulan'     => $this->pemasukanModel->getPemasukanPerBulan(),
            'pemasukanPerTahun'     => $this->pemasukanModel->getPemasukanPerTahun(),

            'pengeluaranPerBulan'   => $this->pengeluaranModel->getPengeluaranPerBulan(),
            'pengeluaranPerTahun'   => $this->pengeluaranModel->getPengeluaranPerTahun()
        ];

        return view('laporan/index', $data);
    }
}
