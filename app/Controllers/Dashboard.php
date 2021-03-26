<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Dashboard extends BaseController
{
	public function index()
	{
		$pemasukan = $this->pemasukanModel->findAll();

		$data = [
			'title' => "Sikromo - Dashboard",
			'pemasukan' => $pemasukan
		];

		return view('dashboard/index', $data);
	}
}
