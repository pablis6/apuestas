<?php
	require_once __DIR__.'/config.php';
	
	function registro($params){
		global $BD;
		$query = "INSERT INTO usuarios (email, nombre, contrasenia) VALUES ('".$params['email']. "', '" .$params['nick']. "', '" .$params['pass']."')";
		$BD-> query($query)
			or die ($BD->error. ' en la linea '.(__LINE__-1));
	}
	
	function selectUser($email){
		global $BD;
		$query = "SELECT email, contrasenia, nombre FROM usuarios WHERE email LIKE '$email'";
		
		$usuario = $BD-> query($query)
			or die ($BD->error. ' en la linea '.(__LINE__-1));
  
		return $usuario;
	}
?>