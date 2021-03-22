<?php

namespace App\Controllers;

use App\Models\PemasukanModel;

class Pemasukan extends BaseController
{
    public function index()
    {
        //$pemasukanModel = new PemasukanModel();
        //$pemasukan = $pemasukanModel->findAll();
        //dd($pemasukan);

        return view('pages/pemasukan');
    }
}
