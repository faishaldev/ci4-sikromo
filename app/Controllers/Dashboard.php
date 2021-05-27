<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'currentMenu'				=> 'dashboard',
			'title'						=> "Sikromo - Dashboard",

			'pemasukanHariIni'			=> $this->pemasukanModel->getPemasukanHariIni(),
			'pemasukanBulanIni'			=> $this->pemasukanModel->getPemasukanBulanIni(),
			'pemasukanTahunIni'			=> $this->pemasukanModel->getPemasukanTahunIni(),
			'seluruhPemasukan'			=> $this->pemasukanModel->getSeluruhPemasukan(),

			'pengeluaranHariIni'		=> $this->pengeluaranModel->getPengeluaranHariIni(),
			'pengeluaranBulanIni'		=> $this->pengeluaranModel->getPengeluaranBulanIni(),
			'pengeluaranTahunIni'		=> $this->pengeluaranModel->getPengeluaranTahunIni(),
			'seluruhPengeluaran'		=> $this->pengeluaranModel->getSeluruhPengeluaran(),

			'pemasukanPerBulan'			=> $this->pemasukanModel->getPemasukanPerBulan(),
			'pemasukanPerTahun'			=> $this->pemasukanModel->getPemasukanPerTahun(),

			'pengeluaranPerBulan'		=> $this->pengeluaranModel->getPengeluaranPerBulan(),
			'pengeluaranPerTahun'		=> $this->pengeluaranModel->getPengeluaranPerTahun(),

			'hutangBelumLunas'			=> $this->hutangModel->getHutangBelumLunas()
		];

		return view('dashboard/index', $data);
	}

	public function update($id_hutang)
	{
		$this->hutangModel->save([
			'id_hutang'     => $id_hutang,
			'tgl_hutang'    => $this->request->getVar('tgl_hutang'),
			'penghutang'    => $this->request->getVar('penghutang'),
			'jumlah'        => $this->request->getVar('jumlah'),
			'keterangan'    => $this->request->getVar('keterangan'),
			'status'        => $this->request->getVar('status')
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah!');

		return redirect()->to('/dashboard');
	}
}
