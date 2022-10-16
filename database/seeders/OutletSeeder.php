<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlets =[
            [
                'name'          => 'Sahabat laundry 01',
                'address'       => 'Lubuk Baja, Batam',
                'phone_number'  => '0812-6618-9682'
            ],
            [
                'name'          => 'Sahabat laundry 02',
                'address'       => 'Tanjung Uncang, Batam',
                'phone_number'  => '0813-6500-1221'
            ]
        ];

        Outlet::insert($outlets);
    }
}
