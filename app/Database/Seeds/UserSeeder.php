<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $user_data = [
			[
				'username'      => 'admin',
				'password'      =>  password_hash('admin123', PASSWORD_DEFAULT),
				'nama_lengkap'  => 'AdminAdmin'
			],
		];

		foreach($user_data as $data){
			// insert semua data ke tabel
			$this->db->table('users')->insert($data);
		}
    }
}
