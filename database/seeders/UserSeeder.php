<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                // 'id'        => 1,
                'name'          => 'Hasudungan',
                'email'         => 'hasudungan@gmail.com',
                'password'      => bcrypt('admin'),
                'role_id'       => 1,
                'phone_number'  => '12345645',
            ],
            [
                // 'id'        => 1,
                'name'          => 'Arief',
                'email'         => 'Arief@gmail.com',
                'password'      => bcrypt('admin'),
                'role_id'       => 4,
                'phone_number'  => '12345645',
            ],
            [
                // 'id'        => 1,
                'name'          => 'Satrio',
                'email'         => 'satrio@gmail.com',
                'password'      => bcrypt('admin'),
                'role_id'       => 4,
                'phone_number'  => '12345645',
            ],
            [
                // 'id'        => 1,
                'name'          => 'Asep',
                'email'         => 'asep@gmail.com',
                'password'      => bcrypt('admin'),
                'role_id'       => 4,
                'phone_number'  => '12345645',
            ],
            [
                // 'id'        => 1,
                'name'          => 'Hasudungan',
                'email'         => 'trio@gmail.com',
                'password'      => bcrypt('admin'),
                'role_id'       => 4,
                'phone_number'  => '12345645',
            ],
        ];
        User::insert($users);
    }
}
