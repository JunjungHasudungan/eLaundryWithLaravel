<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    // deklarasi variable yang dibutuhkan
    public $posts, $id_post, $name;
    public $is_modal = 0;

    public function render()
    {
        $this->posts = Post::all();

        return view('livewire.posts', [
            'posts' => $this->posts
        ]);
    }

    public function openModal()
    {
        $this->is_modal = true;
    }

    public function resetField()
    {
        $this->name = '';
    }

    public function closeModal()
    {
        $this->is_modal = false;
    }

    public function store()
    {
        $this->validate([
            'name'      => 'required|string|min:6'
        ]);


        Post::updateOrCreate(['id' => $this->id_post], [
            'name'  => $this->name
        ]);

        session()->flash('message', $this->id_post ? $this->name . 'Ditambahakan' : $this->name . 'Diperbaharui');
        $this->closeModal();
        $this->resetField();
    }
}
