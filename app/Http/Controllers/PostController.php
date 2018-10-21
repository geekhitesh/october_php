<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
	
	private $db_user;
	private $db_pass;
	
	public function __construct() {
		$this->db_user = "rahul";
		$this->db_pass = "rahul@123";
	}
	
	
	public function index(Request $request)
	{
		$username = $request->input('username');
		$password = $request->input('password');
		
		$status = $this->validateRequest($username, $password);
		
	    return $status;
		
	}
	
	private function validateRequest($input_user,$input_pass) {
		
		if($input_user == $this->db_user &&  $input_pass == $this->db_pass)
		   {
			   return "success";
		   }
		   else
		   {
			   return "failure";
		   }
		
	}
}
