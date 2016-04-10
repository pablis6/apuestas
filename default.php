<!DOCTYPE html>
<?php 	
		require_once __DIR__.'/config.php';
?>
<html>
	<head>
		<title>Identificate</title>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<link rel="stylesheet" type="text/css" href="estiloRegistro.css" />
	</head>
	
	<body>
		<h1 id="titulo">Identificate para acceder</h1>
		<div id="registro">
			<h2>Login</h2>
			<form method="post" action="procesarLogin.php">
				<fieldset>
						<input class = "textField" required="required" name="email" maxlength="50" type="text" placeholder="email"><br><br>
						<input class = "textField" required="required" name="pass" maxlength="50" type="password" placeholder="contraseña"><br><br>
						<input id = "btnLog" value="LOGIN" type="submit">
				</fieldset> 
			</form>
		</div>
		
		<div id="registro">
			<h2>Registro</h2>
			<form method="post" action="procesarRegistro.php">
				<fieldset>
						<input class = "textField" required="required" name="email" maxlength="30" type="text" placeholder="email"><br><br>
						<input class = "textField" required="required" name="nick" maxlength="30" type="text" placeholder="nick"><br><br>
						<input class = "textField" required="required" name="pass" maxlength="30" type="password" placeholder="contraseña"><br><br>
						<input class = "textField" required="required" name="pass2" maxlength="30" type="password" placeholder="repite contraseña"><br><br>
						<input id = "btnReg" value="REGISTRO" type="submit">
				</fieldset> 
			</form>
		</div>
	</body>
</html>