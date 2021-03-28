<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'currentMenu' => 'dashboard',

			'title' => "Sikromo - Dashboard",

			'pemasukanHariIni' => $this->pemasukanModel->getPemasukanHariIni(),
			'pemasukanBulanIni' => $this->pemasukanModel->getPemasukanBulanIni(),
			'pemasukanTahunIni' => $this->pemasukanModel->getPemasukanTahunIni(),
			'seluruhPemasukan' => $this->pemasukanModel->getSeluruhPemasukan(),

			'pengeluaranHariIni' => $this->pengeluaranModel->getPengeluaranHariIni(),
			'pengeluaranBulanIni' => $this->pengeluaranModel->getPengeluaranBulanIni(),
			'pengeluaranTahunIni' => $this->pengeluaranModel->getPengeluaranTahunIni(),
			'seluruhPengeluaran' => $this->pengeluaranModel->getSeluruhPengeluaran(),
		];

		return view('dashboard/index', $data);
	}
}
