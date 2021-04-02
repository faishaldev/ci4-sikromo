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

            'pemasukanPerBulan'     => $this->pemasukanModel->getPemasukanPerBulan(),
            'pengeluaranPerBulan'   => $this->pengeluaranModel->getPengeluaranPerBulan()
        ];

        return view('laporan/index', $data);
    }
}
