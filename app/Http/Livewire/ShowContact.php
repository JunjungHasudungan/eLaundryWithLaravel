<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowContact extends Component
{
    public $name, $email;

    public function mount($contact)
    {
        $this->name = $contact->name;
        $this->email = $contact->email;
    }

    public function render()
    {
        return view('livewire.show-contact');
    }
}
