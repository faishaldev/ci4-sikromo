<?php

namespace App\Controllers;

use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    protected $karywanModel;
    public function __construct()
    {
        $this->karywanModel = new KaryawanModel();
    }

    public function index()
    {
        $karyawan = $this->karywanModel->findAll();

        $data = [
            'karyawan' => $karyawan
        ];

        return view('karyawan/index', $data);
    }
}
