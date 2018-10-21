<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    private $users;

    public function __construct() {

    	$this->users = array('Hitesh',
                            'Rajat',
                             'Akash');
    }


    public function greet() {

    	return "Hello World!!";
    }

    public function greetMe($name) {

    	$greeting_message = "Hello ".$name;

    	return $greeting_message;
    }


    private function getUsers()
    {
    	return $this->users;
    }

}
