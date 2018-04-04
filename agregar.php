<?php

include 'conexion.php';
if(isset($_POST['nombres']) && !empty($_POST['nombres']) && isset($_POST['paterno']) && !empty($_POST['paterno']) && isset($_POST['materno']) && !empty($_POST['materno']) && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['password']) && !empty($_POST['password']))
{
	$con=mysql_connect($hostname, $usuario, $password)or die("PROBLEMAS AL CONECTAR");
	mysql_select_db($basededatos)or die("PROBLEMAS AL CONECTAR LA BASE DE DATOS");

	mysql_query("INSERT INTO registro (nombres,paterno,materno,correo,usuario,password) VALUES ('$_POST[nombres]','$_POST[paterno]','$_POST[materno]','$_POST[correo]','$_POST[usuario]','$_POST[password]')",$con);
	
    echo '<script type="text/javascript"> window.location="principal.html"</script>';
}
else{
	echo "PROBLEMAS AL INSERTAR DATOS";
	echo '<script type="text/javascript"> window.location="form.php"</script>';
}
?>