<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'currentMenu' => 'laporan',
            'title' => 'Sikromo - Laporan'
        ];

        return view('laporan/index', $data);
    }
}
