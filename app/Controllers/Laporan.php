<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'currentMenu' => 'laporan',
            'title' => 'Sikromo - Laporan',
            'pemasukanPerBulan' => $this->pemasukanModel->getPemasukanPerBulan(),
            'pengeluaranPerBulan' => $this->pengeluaranModel->getPengeluaranPerBulan()
        ];

        return view('laporan/index', $data);
    }
}
