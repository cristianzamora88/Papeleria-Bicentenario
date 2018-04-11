<?php

include 'conexion.php';
if(isset($_POST['producto']) && !empty($_POST['producto']) && isset($_POST['precio']) && !empty($_POST['precio']) && isset($_POST['mayoreo']) && !empty($_POST['mayoreo']))
{
	$con=mysql_connect($hostname, $usuario, $password)or die("PROBLEMAS AL CONECTAR");
	mysql_select_db($basededatos)or die("PROBLEMAS AL CONECTAR LA BASE DE DATOS");

	mysql_query("INSERT INTO inventario (producto,precio,mayoreo) VALUES ('$_POST[producto]','$_POST[precio]','$_POST[mayoreo]')",$con);
    echo '<script type="text/javascript"> window.location="principalin.php"</script>';
}
else{
	echo "PROBLEMAS AL INSERTAR DATOS";
	echo '<script type="text/javascript"> window.location="formin.php"</script>';
}
?>