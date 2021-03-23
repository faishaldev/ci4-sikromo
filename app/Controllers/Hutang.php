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
        $hutang = $this->hutangModel->findAll();

        $data = [
            'hutang' => $hutang
        ];

        return view('hutang/index', $data);
    }
}
