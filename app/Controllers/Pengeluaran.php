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

    public function save()
    {
        $this->pengeluaranModel->save([
            'tgl_pengeluaran' => $this->request->getVar('tgl_pengeluaran'),
            'jumlah' => $this->request->getVar('jumlah'),
            'id_sumber' => $this->request->getVar('id_sumber')
        ]);

        return redirect()->to('/pengeluaran');
    }
}
