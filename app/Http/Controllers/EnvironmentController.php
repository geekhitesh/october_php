<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;

class EnvironmentController extends Controller
{
    //
	
	
	public function testEnv() {
		
		CustomDebugs::customEcho("This is test");
	}
}
