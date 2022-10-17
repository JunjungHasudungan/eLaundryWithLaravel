<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pakets = [
            [
                'name'          => 'ekspress',
                'type'          => 1,
                'price'         => 6000,
                'outlet_id'     => 1
            ],
            [
                'name'          => 'reguler',
                'type'          => 2,
                'price'         => 6500,
                'outlet_id'     => 2
            ]
        ];

        Paket::insert($pakets);
    }
}
