<!DOCTYPE html>
<?php 	
	require_once __DIR__.'/partidosBD.php';
	
	echo '<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<link rel="stylesheet" type="text/css" href="estiloHeader.css" />
	</head>';

	echo '<div>';
	
		echo'<ul class="nav">';
			$competiciones = selectCompeticiones();
			while($resultadoCompeticiones = $competiciones->fetch_assoc()){
				echo '<li><a title="'.$resultadoCompeticiones["nombre"].'">'.$resultadoCompeticiones["nombre"].'</a>
					<ul >';
						$jornadas = selectJornadasCompeticion($resultadoCompeticiones["idcompeticion"]);
						while($resultadoJornadas = $jornadas->fetch_assoc()){
							echo '<li><a href= "partidos.php?competicion='.$resultadoCompeticiones["idcompeticion"].'&jornada='.$resultadoJornadas["idjornada"].'" title="jornada '.$resultadoJornadas["idjornada"].'">'.$resultadoJornadas["idjornada"].'</a></li>';
						}
					echo '</ul>';
					
				echo '</li>';
			}
			echo '<li><a title="Mis apuestas"> Mis Apuestas</a></li>';
		echo '</ul>';
		
	echo '</div>';
	
?>