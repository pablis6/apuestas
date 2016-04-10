<?php 	
	require_once __DIR__.'/config.php';
	require_once __DIR__.'/usuariosBD.php';
		
	$varemail = $_POST['email'];
	$varpass = $_POST['pass'];
	
	if(login($varemail, $varpass)){
		header('Location: misapuestas.php');
	}
	else {
		header('Location: default.php');
	}
	
	
	function login($varemail, $varpass){
		$varuser = selectUser($varemail)->fetch_assoc();
		if(isset($varuser)){
			if(strcmp($varpass, $varuser["contrasenia"]) == 0){
				return true;
			}
			else{
				return false;
			}
		}
	}
	
?>