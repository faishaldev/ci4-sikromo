<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Sumber extends BaseController
{
    public function index()
    {
        $sumberPemasukan = $this->sumberPemasukanModel->findAll();
        $sumberPengeluaran = $this->sumberPengeluaranModel->findAll();

        $data = [
            'currentMenu' => 'sumber',

            'title' => "Sikromo - Sumber",

            'sumberPemasukan' => $sumberPemasukan,
            'sumberPengeluaran' => $sumberPengeluaran
        ];

        return view('sumber/index', $data);
    }
}
