<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;
use Illuminate\Http\Request;

class Roles extends Component
{
    public $isModal = 0;
    public $name, $id_role, $roles;

    public function render()
    {
        // memanggil class Model Role dan memasukkan kedalam properti $roles
        $this->roles = Role::orderBy('name', 'DESC')->get();

        // dd($this->roles);
        return view('livewire.roles');
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function create()
    {
        $this->resetField();

        $this->openModal();

    }

    public function resetField()
    {
        $this->name = '';
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|string'
        ]);

        $role = Role::insert($request->all());

        // dd($role);r

        // session()->flash('message', $this->role ? $this->name  . 'Telah diupdate' : $this->name . 'Telah ditambahkan');
    
        // $this->resetField();

        // $this->closeModal();
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $this->id_role = $id;
        $this->name = $role->name;

        $this->openModal();
    }
    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        session()->flash('message', $role->name . ' Telah dihapus');
    }
}
