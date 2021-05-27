<?php

namespace App\Controllers;

class Pengguna extends BaseController
{
    public function __construct()
    {
        $this->users = new \Myth\Auth\Models\UserModel();
    }
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.deleted_at', null);
        $query = $builder->get();

        $data = [
            'title'                     => "Sikromo - Pengguna",
            'currentMenu'               => 'pengguna',

            'users'                     => $query->getResult(),

            'pemasukanPerBulan'         => $this->pemasukanModel->getPemasukanPerBulan(),
            'pemasukanPerTahun'         => $this->pemasukanModel->getPemasukanPerTahun(),

            'pengeluaranPerBulan'       => $this->pengeluaranModel->getPengeluaranPerBulan(),
            'pengeluaranPerTahun'       => $this->pengeluaranModel->getPengeluaranPerTahun()
        ];

        return view('pengguna/index', $data);
    }

    public function update($id)
    {
        $this->users->save([
            'id'        => $id,
            'username'  => $this->request->getVar('username'),
            'email'     => $this->request->getVar('email'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to('/pengguna');
    }

    public function delete($id)
    {
        $this->users->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to('/pengguna');
    }
}
