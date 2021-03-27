<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Dashboard extends BaseController
{
	public function index()
	{
		$pemasukanHariIni = $this->pemasukanModel->getPemasukanHariIni();
		$pemasukanBulanIni = $this->pemasukanModel->getPemasukanBulanIni();
		$pemasukanTahunIni = $this->pemasukanModel->getPemasukanTahunIni();
		$seluruhPemasukan = $this->pemasukanModel->getSeluruhPemasukan();

		$pengeluaranHariIni = $this->pengeluaranModel->getPengeluaranHariIni();
		$pengeluaranBulanIni = $this->pengeluaranModel->getPengeluranBulanIni();
		$pengeluaranTahunIni = $this->pengeluaranModel->getPengeluaranTahunIni();
		$seluruhPengeluaran = $this->pengeluaranModel->getSeluruhPengeluaran();

		$data = [
			'title' => "Sikromo - Dashboard",

			'pemasukanHariIni' => $pemasukanHariIni,
			'pemasukanBulanIni' => $pemasukanBulanIni,
			'pemasukanTahunIni' => $pemasukanTahunIni,
			'seluruhPemasukan' => $seluruhPemasukan,

			'pengeluaranHariIni' => $pengeluaranHariIni,
			'pengeluaranBulanIni' => $pengeluaranBulanIni,
			'pengeluaranTahunIni' => $pengeluaranTahunIni,
			'seluruhPengeluaran' => $seluruhPengeluaran
		];

		return view('dashboard/index', $data);
	}
}
