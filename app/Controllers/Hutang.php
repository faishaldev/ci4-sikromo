<?php

namespace App\Controllers;

use App\Models\HutangModel;

class Hutang extends BaseController
{
    protected $hutangModel;
    public function __construct()
    {
        $this->hutangModel = new HutangModel();
    }

    public function index()
    {
        $data = [
            'currentMenu'               => 'hutang',
            'title'                     => 'Sikromo - Hutang',

            'hutang'                    => $this->hutangModel->getHutang(),

            'pemasukanPerBulan'         => $this->pemasukanModel->getPemasukanPerBulan(),
            'pemasukanPerTahun'         => $this->pemasukanModel->getPemasukanPerTahun(),

            'pengeluaranPerBulan'       => $this->pengeluaranModel->getPengeluaranPerBulan(),
            'pengeluaranPerTahun'       => $this->pengeluaranModel->getPengeluaranPerTahun()
        ];

        return view('hutang/index', $data);
    }

    public function save()
    {
        $this->hutangModel->save([
            'tgl_hutang'    => $this->request->getVar('tgl_hutang'),
            'penghutang'    => $this->request->getVar('penghutang'),
            'jumlah'        => $this->request->getVar('jumlah'),
            'keterangan'    => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to('/hutang');
    }

    public function update($id_hutang)
    {
        $this->hutangModel->save([
            'id_hutang'     => $id_hutang,
            'tgl_hutang'    => $this->request->getVar('tgl_hutang'),
            'penghutang'    => $this->request->getVar('penghutang'),
            'jumlah'        => $this->request->getVar('jumlah'),
            'keterangan'    => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to('/hutang');
    }

    public function delete($id_hutang)
    {
        $this->hutangModel->delete($id_hutang);

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to('/hutang');
    }
}
