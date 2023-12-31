<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guest extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function events(){
        return $this->belongsTo(Event::class);
    }


    protected $fillable = [
        'name_g',
        'tickets_g',
        'events_id',
    ];
}
