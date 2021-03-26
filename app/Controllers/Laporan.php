<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sikromo - Laporan'
        ];

        return view('laporan/index', $data);
    }
}
