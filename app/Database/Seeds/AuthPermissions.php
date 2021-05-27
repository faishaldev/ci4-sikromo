<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthPermissions extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'manage-users',
                'description'   => 'Manage All Users'
            ],
            [
                'name'          => 'manage-profil',
                'description'   => 'Manage User\'s Profile'
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO auth_permission (name, description) VALUES(:name:, :description:)", $data);

        // Using Query Builder
        $this->db->table('auth_permissions')->insertBatch($data);
    }
}
