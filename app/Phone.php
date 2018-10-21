<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //inverse relationship


    public function student() {

    	return $this->belongsTo('App\Student');
    }
}
