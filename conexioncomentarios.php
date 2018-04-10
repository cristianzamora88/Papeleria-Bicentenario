<?php
$conexion = mysqli_connect("localhost","root","123","comentarios");

if (!$conexion) {
 die("Error de conexión (".mysqli_connect_errno().")".mysqli_connect_error());
} 
?>