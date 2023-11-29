<?php

namespace App\Models;

use App\Models\User;
use App\Models\Guest;
use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[
        'name_e',
        'date_e',
        'hassits_e',
        'numsits_e',
        'places_id',
        'users_id',
    ];
    
    public $timestamps = false;

    public function places(){
        return $this->belongsTo(Place::class);
    }

    public function guests(){
        return $this->hasMany(Guest::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
