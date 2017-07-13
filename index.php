<?php


require_once(__DIR__.'/config/config.php');
require_once(__DIR__.'/controllers/Register_Controller.php');


$path = __DIR__.'/controllers/Register_Controller.php';
if (!file_exists($path)) {
	header("Location:http://localhost/www/modelhouse/public/404.php");
	exit();
}

$register = new Register_Controller();



$action = isset($_GET['action']) ? $_GET['action'] : ACTION_DEFAULT ;
switch ($action) {
	case 'register' :
		if (!method_exists($register, 'register')) {
			header("Location:http://localhost/www/modelhouse/public/404.php");
			exit();
		}
		$register->register();
		break;
	// case 'confirm':
	// 	$register->register();
	// 	break;
	case 'success': 
		$register->success();
		break;

	
	default:
		# code...
		break;
}

?>