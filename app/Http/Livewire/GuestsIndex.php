<?php

namespace App\Http\Livewire;

use App\Models\Guest;
use Livewire\Component;
use Livewire\WithPagination;

class GuestsIndex extends Component
{
    use WithPagination;
    
    public $event;
    public $nameFilter;
    public $confirmedFilter;
    public $display=false;

    protected $paginationTheme = 'bootstrap';

    public function mount($event){
        $this->event = $event;
    }
    
    public function render()
    {
        $confirmed = Guest::where('confirmed_g', 1)
        ->where('events_id', $this->event)
        ->count();
        $unconfirmed = Guest::where('confirmed_g', 0)
        ->where('events_id', $this->event)
        ->count();
        $guests = Guest::query()
        ->when($this->confirmedFilter, function($query){
            $query->where('confirmed_g', $this->confirmedFilter);
        })
        ->when($this->nameFilter, function($query){
            $query->where('name_g', 'like', '%' . $this->nameFilter . '%');
        })
        ->where('events_id', $this->event)
        ->paginate(10);
        return view('livewire.guests-index', compact('guests', 'confirmed', 'unconfirmed'));
    }
}
