<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::with('role')->where('role_id', 4)->get();

        // dd($this->users);

        return view('livewire.show-users', [
            'users' => User::orderBy('name')->where('role_id', 4)->get()
        ]);
    }

    public function showMembers()
    {
        $this->users = User::with('role')->where('role_id', 4)->get();
    }
}
