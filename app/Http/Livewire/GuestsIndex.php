<?php

namespace App\Http\Livewire;

use App\Models\Guest;
use Livewire\Component;

class GuestsIndex extends Component
{
    public $event;

    public function mount($event){
        $this->event = $event;
    }
    
    public function render()
    {
        $guests = Guest::where('events_id', $this->event)->get();
        return view('livewire.guests-index', compact('guests'));
    }
}
