<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
        public function run()
    {
        $data = [
            ['username' => 'abouyaziyd', 'name' => 'Abu Yaziyd', 'password' => password_hash('admin', PASSWORD_DEFAULT), 'role' => 'admin'],
        ];

        $this->db->table('users')->insert($data);
    }

}
