<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $isModal = 0;
    public $id_category, $name, $categories;

    public function render()
    {
        $this->categories = Category::all();
        dd($this->categories);
        return view('livewire.categories.index');
    }
}
