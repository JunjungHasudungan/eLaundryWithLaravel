<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;

    // public function mount($param)
    // {
    //     $this->count = $param->count;
    // }

    public function render()
    {
        // $this->count = 1;
        return view('livewire.counter');
    }
}
