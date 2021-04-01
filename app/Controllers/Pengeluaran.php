<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Myth\Auth\Commands\Publish;

class Pengeluaran extends BaseController
{
    public function index()
    {
        $pengeluaran = $this->pengeluaranModel->getPengeluaran();
        $pemasukanPerBulan = $this->pemasukanModel->getPemasukanPerBulan();
        $pengeluaranPerBulan = $this->pengeluaranModel->getPengeluaranPerBulan();

        $data = [
            'currentMenu' => 'pengeluaran',
            'title' => 'Sikromo - Pengeluaran',
            'pengeluaran' => $pengeluaran,
            'pemasukanPerBulan' => $pemasukanPerBulan,
            'pengeluaranPerBulan' => $pengeluaranPerBulan
        ];

        return view('pengeluaran/index', $data);
    }

    public function save()
    {
        $this->pengeluaranModel->save([
            'tgl_pengeluaran' => $this->request->getVar('tgl_pengeluaran'),
            'jumlah' => $this->request->getVar('jumlah'),
            'sumber' => $this->request->getVar('sumber')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to('/pengeluaran');
    }

    public function update($id_pengeluaran)
    {
        $this->pengeluaranModel->save([
            'id_pengeluaran' => $id_pengeluaran,
            'tgl_pengeluaran' => $this->request->getVar('tgl_pengeluaran'),
            'jumlah' => $this->request->getVar('jumlah'),
            'sumber' => $this->request->getVar('sumber')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to('/pengeluaran');
    }

    public function delete($id_pengeluaran)
    {
        $this->pengeluaranModel->delete($id_pengeluaran);

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to('/pengeluaran');
    }
}
