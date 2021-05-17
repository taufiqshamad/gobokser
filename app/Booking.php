<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{User, Bengkel};

class Booking extends Model
{
    public function user()
    {
    	return $this->hasOne(User::class);
    }

    public function bengkel()
    {
    	return $this->belongsTo(Bengkel::class);
    }
}
