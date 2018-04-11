<?php

$id_eliminar=$_REQUEST['id'];
//echo "$id_eliminar";
include 'conexion.php';
$query="DELETE FROM inventario where id=$id_eliminar";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principalin.php"</script>';
?>