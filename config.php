<?php
// Varios defines para los par�metros de configuraci�n de acceso a la BD y la URL desde la que se sirve la aplicaci�n
define('BD_HOST', 'localhost');
define('BD_NAME', 'apuestas');
define('BD_USER', 'normalApuestas');
define('BD_PASS', 'normalApuestas');

define('RAIZ_APP', 'http://localhost/apuestas');
define('INSTALADA', true );

register_shutdown_function('cierraConexion');

$BD = new mysqli(BD_HOST, BD_USER, BD_PASS, BD_NAME);
if ( $BD->connect_errno ) {
  echo "Error de conexi�n a la BD: (" . $BD->connect_errno . ") " . utf8_encode($BD->connect_error);
  exit();
}

if ( ! $BD->set_charset("utf8mb4")) {
  echo "Error al configurar la codificaci�n de la BD: (" . $BD->errno . ") " . utf8_encode($BD->error);
  exit();
}

function cierraConexion() {
  // S�lo hacer uso de global para cerrar la conexion !!
  global $BD;
  if ( isset($BD) && ! $BD->connect_errno ) {
    $BD->close();
  }
}

session_start();
?> 