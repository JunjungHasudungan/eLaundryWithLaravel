<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
<<<<<<< HEAD
                'name'  => 'post 1'
            ],
            [
                'name'  => 'post 2'
=======
                'title' => 'Post Pertama'
>>>>>>> 9e14ce35d884afc1d26c1050ca880e2998315d05
            ]
        ];

        Post::insert($posts);
    }
}
