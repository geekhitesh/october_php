<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    // hasOne
    // hasMany
    // belongsTo
    // belongsToMany

    protected $fillable = [
        'name',
    ];

    protected $hidden = ['age'];

    public function phone() {
    	return $this->hasOne('App\Phone');
    }

    public function tutorial() {

    	return $this->belongsToMany('App\tutorial');
    }

    public function lecture() {

    	//return $this->hasManyThrough('App\Lecture','App\Tutorial');
    }
}
