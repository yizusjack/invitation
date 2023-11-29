<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Event;
use App\Models\Place;
use Livewire\Component;

class EventsIndex extends Component
{   
    public $dispInsert=false;
    public $sits;
    public $name_e;
    public $date_e;
    public $hassits_e;
    public $numsits_e=0;
    public $places_id;
    public $users_id;

    protected $rules=[
        'name_e' =>['required', 'max:255'],
        'date_e' =>['required', 'date'],
        'hassits_e' =>['required', 'boolean'],
        'numsits_e' => ['min:0'],
        'places_id' =>['required', 'exists:places,id'],
        'users_id' =>['required', 'exists:users,id'],
    ];
    
    public function save(){
        $this->validate();

        Event::create([
            'name_e' => $this->name_e,
            'date_e' => $this->date_e,
            'hassits_e' => $this->hassits_e,
            'numsits_e' => $this->numsits_e,
            'places_id' => $this->places_id,
            'users_id' => $this->users_id,
        ]);

        $this->reset(['dispInsert', 
        'name_e',
        'date_e',
        'hassits_e',
        'numsits_e',
        'places_id',
        'users_id',
        ]);
    }
    
    public function render()
    {
        $places = Place::all();
        $users = User::all();
        $events = Event::with('places')->get();
        return view('livewire.events-index', compact('events', 'places', 'users'));
    }
}
