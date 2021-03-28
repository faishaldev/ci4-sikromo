<?php

namespace App\Controllers;

use Myth\Auth\Commands\Publish;

class Pemasukan extends BaseController
{
    public function index()
    {
        $pemasukan = $this->pemasukanModel->getPemasukan();

        $data = [
            'currentMenu' => 'pemasukan',
            'title' => 'Sikromo - Pemasukan',
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
