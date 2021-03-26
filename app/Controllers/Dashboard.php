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

		$data = [
			'title' => "Sikromo - Dashboard",
			'pemasukanHariIni' => $pemasukanHariIni,
			'pemasukanBulanIni' => $pemasukanBulanIni,
			'pemasukanTahunIni' => $pemasukanTahunIni,
			'seluruhPemasukan' => $seluruhPemasukan
		];

		return view('dashboard/index', $data);
	}
}
