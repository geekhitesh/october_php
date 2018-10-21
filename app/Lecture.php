<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    //

    public function tutorial() {

    	return $this->belongsTo('App\Tutorial');
    }
}
