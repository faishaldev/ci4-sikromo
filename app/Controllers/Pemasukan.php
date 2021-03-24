<?php

namespace App\Controllers;

use App\Models\PemasukanModel;
use Myth\Auth\Commands\Publish;

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

    public function save()
    {
        $this->pemasukanModel->save([
            'tgl_pemasukan' => $this->request->getVar('tgl_pemasukan'),
            'jumlah' => $this->request->getVar('jumlah'),
            'id_sumber' => $this->request->getVar('id_sumber')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to('/pemasukan');
    }

    public function delete($id_pemasukan)
    {
        $this->pemasukanModel->delete($id_pemasukan);

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to('/pemasukan');
    }
}
