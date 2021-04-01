<?php

namespace App\Controllers;

use Myth\Auth\Commands\Publish;

class Pemasukan extends BaseController
{
    public function index()
    {
        $pemasukan = $this->pemasukanModel->getPemasukan();
        $pemasukanPerBulan = $this->pemasukanModel->getPemasukanPerBulan();
        $pengeluaranPerBulan = $this->pengeluaranModel->getPengeluaranPerBulan();

        $data = [
            'currentMenu' => 'pemasukan',
            'title' => 'Sikromo - Pemasukan',
            'pemasukan' => $pemasukan,
            'pemasukanPerBulan' => $pemasukanPerBulan,
            'pengeluaranPerBulan' => $pengeluaranPerBulan,
        ];

        return view('pemasukan/index', $data);
    }

    public function save()
    {
        $this->pemasukanModel->save([
            'tgl_pemasukan' => $this->request->getVar('tgl_pemasukan'),
            'jumlah' => $this->request->getVar('jumlah'),
            'sumber' => $this->request->getVar('sumber')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to('/pemasukan');
    }

    public function update($id_pemasukan)
    {
        $this->pemasukanModel->save([
            'id_pemasukan' => $id_pemasukan,
            'tgl_pemasukan' => $this->request->getVar('tgl_pemasukan'),
            'jumlah' => $this->request->getVar('jumlah'),
            'sumber' => $this->request->getVar('sumber')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to('/pemasukan');
    }

    public function delete($id_pemasukan)
    {
        $this->pemasukanModel->delete($id_pemasukan);

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to('/pemasukan');
    }
}
