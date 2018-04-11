<?php

include 'conexion.php';
if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['producto']) && !empty($_POST['producto']) && isset($_POST['precio']) && !empty($_POST['precio']) && isset($_POST['mayoreo']) && !empty($_POST['mayoreo']))
{
	$con=mysql_connect($hostname, $usuario, $password)or die("PROBLEMAS AL CONECTAR");
	mysql_select_db($basededatos)or die("PROBLEMAS AL CONECTAR LA BASE DE DATOS");
    
	mysql_query("UPDATE inventario SET producto='$_POST[producto]',precio='$_POST[precio]',mayoreo='$_POST[mayoreo]' WHERE id=$_POST[id]",$con) or die (mysql_error());
    echo '<script type="text/javascript"> window.location="principalin.php"</script>';

}
else{
	echo "PROBLEMAS AL MODIFICAR DATOS";
	echo '<script type="text/javascript"> window.location="formmodin.php"</script>';
}
?>