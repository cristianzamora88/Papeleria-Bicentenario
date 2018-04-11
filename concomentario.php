
<?php 


include 'conexion.php';
if(isset($_POST['nombres']) && !empty($_POST['nombres']) && isset($_POST['apellidos']) && !empty($_POST['apellidos']) && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['telefono']) && !empty($_POST['telefono']) && isset($_POST['comentario']) && !empty($_POST['comentario']))
{
	$con=mysql_connect($hostname, $usuario, $password)or die("PROBLEMAS AL CONECTAR");
	mysql_select_db($basededatos)or die("PROBLEMAS AL CONECTAR LA BASE DE DATOS");

	mysql_query("INSERT INTO comentarios (nombres,apellidos,correo,telefono,comentario) VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[correo]','$_POST[telefono]','$_POST[comentario]')",$con);
	
    echo '<script type="text/javascript"> window.location="principal.html"</script>';
}
else{
	echo "PROBLEMAS AL INSERTAR DATOS";
	echo '<script type="text/javascript"> window.location="comentarios.php"</script>';
}


/*// Llamamos al archivo de conexión a la base de datos
include("conexion.php");
 	$con=mysql_connect($hostname, $usuario, $password)or die("PROBLEMAS AL CONECTAR");
	mysql_select_db($basededatos)or die("PROBLEMAS AL CONECTAR LA BASE DE DATOS");
//Creamos las variables con los nombres de los campos del formulario
$nombre = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];

// Codigo de insercion a la base de datos
$insertar = mysqli_query("INSERT INTO comentarios (nombres,apellidos,correo,telefono,comentario) VALUES ('$nombres','$apellidos','$correo','$telefono',$comentario')",$con);

if (!$insertar) {
 echo "Error al guardar";
} else {
 echo "Guardado con éxito";
}

<?php
if(isset($_POST['correo'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "315030055@upjr.edu.mx";
$email_subject = "Contacto desde el sitio web.";
$email_from = "cristianzamora88@gmail.com";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombres']) ||
!isset($_POST['apellidos']) ||
!isset($_POST['correo']) ||
!isset($_POST['telefono']) ||
!isset($_POST['comentario'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombres'] . "\n";
$email_message .= "Apellido: " . $_POST['apellidos'] . "\n";
$email_message .= "E-mail: " . $_POST['correo'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "Comentarios: " . $_POST['comentario'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From:'.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
header('Location:principal.html');
}

?>*/
?>
