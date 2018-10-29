<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginApi extends Controller
{
    //

	public function authenticate() {


		return "Authentication Successful";
	}

	public function getList() {

		$array = array(1,2,3,4,5,6,7,8);
		return $array;
	}
}
