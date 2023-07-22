<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InsertGuest extends Component
{
    public $display=true;
    
    public function render()
    {
        return view('livewire.insert-guest');
    }
}
