<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Myth\Auth\Commands\Publish;
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
        $data = [
            'currentMenu'               => 'karyawan',
            'title'                     => 'Sikromo - Karyawan',

            'karyawan'                  => $this->karywanModel->getKaryawan(),

            'pemasukanPerBulan'         => $this->pemasukanModel->getPemasukanPerBulan(),
            'pengeluaranPerBulan'       => $this->pengeluaranModel->getPengeluaranPerBulan()
        ];

        return view('karyawan/index', $data);
    }

    public function save()
    {
        $this->karywanModel->save([
            'nama'      => $this->request->getVar('nama'),
            'umur'      => $this->request->getVar('umur'),
            'posisi'    => $this->request->getVar('posisi'),
            'kontak'    => $this->request->getVar('kontak'),
            'alamat'    => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to('/karyawan');
    }

    public function update($id_karyawan)
    {
        $this->karywanModel->save([
            'id_karyawan'   => $id_karyawan,
            'nama'          => $this->request->getVar('nama'),
            'umur'          => $this->request->getVar('umur'),
            'posisi'        => $this->request->getVar('posisi'),
            'kontak'        => $this->request->getVar('kontak'),
            'alamat'        => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to('/karyawan');
    }

    public function delete($id_karyawan)
    {
        $this->karywanModel->delete($id_karyawan);

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to('/karyawan');
    }
}
