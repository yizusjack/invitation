<?php

namespace App\Http\Livewire;

use DateTime;
use Livewire\Component;

class Countdown extends Component
{
    public $date;
    public $times;
    public $appDate;
    public $count;

    public function mount($date){
        $this->date=$date;
        $this->times = strtotime($this->date);
        $this->appDate=new DateTime(date('m/d/Y H:i:s', $this->times));
    }

    public function render()
    {
        $countdown=$this->appDate->diff(now());
        return view('livewire.countdown', compact('countdown'));
    }
}
