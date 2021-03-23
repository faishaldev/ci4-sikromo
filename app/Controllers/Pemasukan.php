<?php

namespace App\Controllers;

use App\Models\PemasukanModel;

class Pemasukan extends BaseController
{
    protected $pemasukanModel;
    public function __construct()
    {
        $this->pemasukanModel = new PemasukanModel();
    }

    public function index()
    {
        $pemasukan = $this->pemasukanModel->findAll();

        $data = [
            'pemasukan' => $pemasukan
        ];

        return view('pemasukan/index', $data);
    }

    public function create()
    {
        $data = [
            $data => 'Form Tambah Pemasukan'
        ];

        return view('pemasukan/create', $data);
    }

    public function save()
    {
        $this->pemasukanModel->save([
            'tgl_pemasukan' => $this->request->getVar('tgl_pemasukan'),
            'jumlah' => $this->request->getVar('jumlah'),
            'id_sumber' => $this->request->getVar('id_sumber')
        ]);

        return redirect()->to('/pemasukan');
    }
}
