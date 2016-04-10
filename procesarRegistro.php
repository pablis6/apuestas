<?php 	
	require_once __DIR__.'/config.php';
	require_once __DIR__.'/usuariosBD.php';
	require_once __DIR__.'/procesarLogin.php';
		
		
	//if(isset($_POST['apellido']))
	
	$varemail = $_POST['email'];	
	$varnick = $_POST['nick'];
	$varpass = $_POST['pass'];
	$varpass2 = $_POST['pass2'];
	
	$params['email'] = $varemail;
	$params['nick'] = $varnick;
	$params['pass'] = $varpass;
	
	
	
	if(strcmp($varpass, $varpass2) == 0){
		if(registro($params)){
			if(login($varemail, $varpass)){
				header('Location: misapuestas.php');
			}
			else {
				header('Location: default.php');
			}
		}
	}
	else {
		header("Location: default.php");
		

	}	
?>