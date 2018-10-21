<?php

namespace App\CustomHelpers;


class CustomDebugs {

	public static function customEcho($string) {
		
		if(env('APP_MODE') == "PROD")
			echo $string;
	}
	
}

?>