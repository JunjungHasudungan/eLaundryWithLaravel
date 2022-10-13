<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{

    public function render()
    {
        
        // memanggil Class User untuk passing data ke dalam variable users
        return view('livewire.show-users', [
            'users' => User::all()
        ]);
    }
}
