<!DOCTYPE html>
<?php 	
		require_once __DIR__.'/partidosBD.php';
?>
<html>
	<head>
		<title>Partidos</title> 
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<link rel="stylesheet" type="text/css" href="estiloPartidos.css" />
	</head>
	
	<body>
		<div id="cabecera">
			<?php include("header.php"); ?>
		</div>
		<div>
		<h1>Partidos del dia </h1>
		</div>
			<?php 	
			
				$competi = $_GET["competicion"];
				$jornada = $_GET["jornada"];
				
				if(isset($competi) && isset($jornada)){
					echo '<div id=partidos>';
				
					$partidos = selectPartidos($_GET["competicion"], $_GET["jornada"]);
					while($resultadoPartidos = $partidos->fetch_assoc()){
						$nombreLocal = selectEquiposPartidos($resultadoPartidos["idlocal"])->fetch_assoc();
						$nombreVisitante = selectEquiposPartidos($resultadoPartidos["idvisitante"])->fetch_assoc();
						
						echo ' <p> '.$nombreLocal["nombre"].' - '.$resultadoPartidos["resultadoLocal"].' - '.$resultadoPartidos["resultadoVisitante"].' - '.$nombreVisitante["nombre"].'</p>';
					}
					echo '</div>';
					
				}
				else {
					header('Location: portada.php');
				}
			?>
	</body>

</html>