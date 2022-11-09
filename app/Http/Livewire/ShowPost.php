<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $comments;


    public function render()
    {

        $this->comments = Post::with('comments')->get();
        return view('livewire.show-post', [
            'posts' => $this->comments
        ]);
    }
}
