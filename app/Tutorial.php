<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    //


    public function lecture() {

    	return $this->hasMany('App\Lecture');
    }

    public function student() {

    	return $this->belongsToMany('App\Student');
    }
}
