<?php

include 'conexion.php';
if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['nombres']) && !empty($_POST['nombres']) && isset($_POST['paterno']) && !empty($_POST['paterno']) && isset($_POST['materno']) && !empty($_POST['materno']) && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['password']) && !empty($_POST['password']))

	$con=mysql_connect($hostname, $usuario, $password)or die("PROBLEMAS AL CONECTAR");
	mysql_select_db($basededatos)or die("PROBLEMAS AL CONECTAR LA BASE DE DATOS");
    
	mysql_query("UPDATE registro SET nombres='$_POST[nombres]',paterno='$_POST[paterno]',materno='$_POST[materno]',correo='$_POST[correo]',usuario='$_POST[usuario]',password='$_POST[password]' WHERE id=$_POST[id]",$con) or die (mysql_error());
    echo '<script type="text/javascript"> window.location="principal.php"</script>';

}
else{
	echo "PROBLEMAS AL MODIFICAR DATOS";
	echo '<script type="text/javascript"> window.location="formmod.php"</script>';
}
?>