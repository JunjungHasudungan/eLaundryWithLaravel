<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            OutletSeeder::class,
            PaketSeeder::class,
            PostSeeder::class,
<<<<<<< HEAD
=======
            CommentSeeder::class,
>>>>>>> 9e14ce35d884afc1d26c1050ca880e2998315d05
        ]);
    }
}
