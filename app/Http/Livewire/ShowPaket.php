<?php

namespace App\Http\Livewire;

use App\Models\Paket;
use Livewire\Component;

class ShowPaket extends Component
{
    public $pakets;
    public $is_modal = false;

    public function render()
    {
        $this->pakets = Paket::with('outlet')->get();
        dd($this->pakets);
        return view('livewire.show-paket', [
            'pakets' => $this->pakets
        ]);
    }
}
