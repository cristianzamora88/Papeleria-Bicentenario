<?php
$hostname="localhost";
$usuario="root";
$password="";
$basededatos="usuarios";

$mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
if ( mysqli_connect_errno() ) {
	echo "Error de conexión a la BD: ".mysqli_connect_error();
	exit();
}
else
{
	//echo "Entraste";
}
?>
