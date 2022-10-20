<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public $name, $email, $password, $users, $id_user, $role_id;

    public $is_modal = false;


    public function render()
    {
        $this->users = User::with('role')->get();

        // dd($this->users->all());

        return view('livewire.show-users', [
            'users' => $this->users
        ]);
    }

    public function resetModal()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->id = '';
    }

    public function openModal()
    {
        $this->is_modal = true;
    }

    public function closeModal()
    {
        $this->is_modal = false;
    }

    public function openProfileUser()
    {
        $this->openModal();
    }

    public function showMembers()
    {
        $this->users = User::with('role')->where('role_id', 4)->get();
    }
}
