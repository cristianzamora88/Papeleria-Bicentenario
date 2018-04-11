<html>
<head>
    <title>Formulario sesion</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/misestilos.css">	
</head>
<body>
<?php
  $usuariof=$_REQUEST["usuario"];	
  $passwordf=$_REQUEST["password"];
  include 'conexion.php';

if($usuariof=='admin' && $passwordf=='1234'){
      header('Location:administrador.html');
    }
    else{
    $query="SELECT * FROM registro where usuario='$usuariof' and password='$passwordf'";
    $resultado = $mysqli->query($query);
    if ($resultado->num_rows > 0) {
    //Crear una sesión en PHP
    session_start();
    //Crear una variable de sesión en PHP
    if(!isset($_SESSION['nombre']))
	{
	$_SESSION['nombre']=$usuariof;
	}
    //Redirigir al inicio
    header('Location:principal.html');
    
    } 
    else {
    header('Location:error.php');
    }
  }
?>
<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>  
<script  type="text/javascript" src="js/conecta.js"></script>   
</body>
</html>
