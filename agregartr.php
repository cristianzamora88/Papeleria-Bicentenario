<?php

include 'conexion.php';
if(isset($_POST['producto']) && !empty($_POST['producto']) && isset($_POST['precio']) && !empty($_POST['precio']))
{
	$con=mysql_connect($hostname, $usuario, $password)or die("PROBLEMAS AL CONECTAR");
	mysql_select_db($basededatos)or die("PROBLEMAS AL CONECTAR LA BASE DE DATOS");

	mysql_query("INSERT INTO trabajos (producto,precio) VALUES ('$_POST[producto]','$_POST[precio]')",$con);
    echo '<script type="text/javascript"> window.location="principaltr.php"</script>';
}
else{
	echo "PROBLEMAS AL INSERTAR DATOS";
	echo '<script type="text/javascript"> window.location="formtr.php"</script>';
}
?>