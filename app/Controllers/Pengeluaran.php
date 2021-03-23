<?php

namespace App\Controllers;

use App\Models\PengeluaranModel;

class Pengeluaran extends BaseController
{
    protected $pengeluaranModel;
    public function __construct()
    {
        $this->pengeluaranModel = new PengeluaranModel();
    }

    public function index()
    {
        $pengeluaran = $this->pengeluaranModel->findAll();

        $data = [
            'pengeluaran' => $pengeluaran
        ];

        return view('pengeluaran/index', $data);
    }
}
