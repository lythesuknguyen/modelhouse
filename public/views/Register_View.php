<?php

/**
* 
*/
class Register_View
{
	
	function __construct()
	{
			
	}
	public function showRegister($error,$data) {
		require_once('public/template/register.php');
	}

	public function showConfirm($data) {
		require_once('public/template/confirm-register.php');

	}
	public function showSuccess() {
		 require_once('public/template/success.php');

	}
	// public function back() {
	// 	 require_once('public/template/register.php');

	// }
}



?>