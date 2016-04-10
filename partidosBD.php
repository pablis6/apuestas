<?php
	require_once __DIR__.'/config.php';
	
	function selectCompeticiones(){
		global $BD;
		$query = "SELECT idcompeticion, nombre FROM competicion";
		
		$consulta = $BD->query($query)
			or die ($BD->error. " en la línea ".(__LINE__-1));
  
		return $consulta;
	}
	
	function selectJornadasCompeticion($competicion){
		global $BD;
		$query = "SELECT idjornada FROM jornadas WHERE idcompeticion = ".$competicion;
		
		$consulta = $BD->query($query)
			or die ($BD->error. " en la línea ".(__LINE__-1));
  
		return $consulta;
	}
	
	function selectPartidos($competicion, $jornada){
		global $BD;
		$query = "SELECT idpartido, idcompeticion, idjornada, idlocal, idvisitante, resultadoLocal, resultadoVisitante, quiniela FROM partidos WHERE idcompeticion = ".$competicion. " AND idjornada = " .$jornada;
		
		$consulta = $BD->query($query)
			or die ($BD->error. " en la línea ".(__LINE__-1));
  
		return $consulta;
	}
	
	
	function selectEquiposPartidos($idequipo){
		global $BD;
		$query = "SELECT nombre FROM equipos where idequipo = ".$idequipo;
		
		$consulta = $BD->query($query)
			or die ($BD->error. " en la línea ".(__LINE__-1));
  
		return $consulta;
	}
?>