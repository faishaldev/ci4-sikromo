<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'             => 'admin@romo.com',
                'username'          => 'admin',
                'password_hash'     => '$2y$10$MSYfOJm7TwKcWqYgmyjHiuwFitOaoRv5rgv.m6zMwNMzuBPETEN8u',
                'reset_hash'        => NULL,
                'reset_at'          => NULL,
                'reset_expires'     => NULL,
                'activate_hash'     => NULL,
                'status'            => NULL,
                'status_message'    => NULL, 'active' => '1',
                'force_pass_reset'  => '0',
                'created_at'        => '2021-05-27 12:11:23',
                'updated_at'        => '2021-05-27 12:11:23',
                'deleted_at'        => NULL
            ],
            [
                'email'             => 'user@romo.com',
                'username'          => 'user',
                'password_hash'     => '$2y$10$lIKOzS.YAOlUJneRzuin5.IdOe5nyAW8r4P8clmHAr9GbMXMn.vDu',
                'reset_hash'        => NULL,
                'reset_at'          => NULL,
                'reset_expires'     => NULL,
                'activate_hash'     => NULL,
                'status'            => NULL,
                'status_message'    => NULL,
                'active'            => '1',
                'force_pass_reset'  => '0',
                'created_at'        => '2021-05-27 12:12:12',
                'updated_at'        => '2021-05-27 12:12:12',
                'deleted_at'        => NULL
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO auth_permission (name, description) VALUES(:name:, :description:)", $data);

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
