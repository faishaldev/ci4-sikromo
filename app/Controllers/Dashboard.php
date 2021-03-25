<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Dashboard extends BaseController
{
	public function index()
	{
		return view('dashboard/index');
	}
}
