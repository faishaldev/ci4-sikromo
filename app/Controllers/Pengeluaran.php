<?php

namespace App\Controllers;

class Pengeluaran extends BaseController
{
    public function index()
    {
        $pengeluaran = $this->pengeluaranModel->getPengeluaran();

        $data = [
            'title' => 'Sikromo - Pengeluaran',
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

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to('/pengeluaran');
    }

    public function delete($id_pengeluaran)
    {
        $this->pengeluaranModel->delete($id_pengeluaran);

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to('/pengeluaran');
    }
}
