<?php

$id_eliminar=$_REQUEST['id'];
//echo "$id_eliminar";
include 'conexion.php';
$query="DELETE FROM populares where id=$id_eliminar";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principalpo.php"</script>';
?>