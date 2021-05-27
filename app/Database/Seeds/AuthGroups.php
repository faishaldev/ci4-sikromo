<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroups extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'admin',
                'description'   => 'Site Administrator'
            ],
            [
                'name'          => 'user',
                'description'   => 'Regular User'
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO auth_groups (name, description) VALUES(:name:, :description:)", $data);

        // Using Query Builder
        $this->db->table('auth_groups')->insertBatch($data);
    }
}
