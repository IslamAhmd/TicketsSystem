<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function ticket(){
    	return $this->hasOne('App\Ticket');
    }
}
