<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Dashboard extends BaseController
{
	public function index()
	{
		$pemasukanHariIni = $this->pemasukanModel->getPemasukanHariIni();
		$seluruhPemasukan = $this->pemasukanModel->getSeluruhPemasukan();

		$data = [
			'title' => "Sikromo - Dashboard",
			'pemasukanHariIni' => $pemasukanHariIni,
			'seluruhPemasukan' => $seluruhPemasukan
		];

		return view('dashboard/index', $data);
	}
}
