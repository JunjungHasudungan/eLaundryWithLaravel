<?php

namespace App\Http\Livewire;

use App\Models\Outlet;
use Livewire\Component;

class ShowOutlets extends Component
{
    public $is_modal = false;
    public $outlets;

    public function render()
    {
        $this->outlets = Outlet::with('pakets')->get();

        // Outlet::/ 

        // dd($this->outlets);
        return view('livewire.show-outlets', [
            'outlets' => $this->outlets
        ]);
    }
}
