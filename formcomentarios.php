<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Formulario de comentarios</title>
<style type="text/css"> 
form ::-webkit-scrollbar {
    width: 8px;
}
form ::-webkit-scrollbar-button {
    background:#003;
}
 
form ::-webkit-scrollbar-track {
 background:#EEE;
}
 
form ::-webkit-scrollbar-thumb {
 background:#003;
}

form {
 clear:both;
 width:74%;
}
#datos {
 float:left;
}
input[type=text] {
 display:block;
 padding:9.4px 4px 9.3px 45px;
 font-family:"Raleway", Arial, Helvetica, sans-serif;
 font-size:18px;
 font-weight:300;
 border:#CCC 1px solid;
 color:#CCC;
 margin:9px 1px 9px 8px;
 transition:all ease-in-out .3s;
 clear:inherit;
}
input[type=text]:hover {
 color:#666;
 border:#666 1px solid;
 box-shadow:2px 2px 2px #EEE,-2px -2px 2px #EEE;

}
input[type=text].nombre { 
 background:#FFF url(imagenes/user.png) no-repeat;
 border-radius:2px 18px 0px 2px;

}
input[type=text].email {
 background:#FFF url(imagenes/email.png) no-repeat;
}

input[type=text].website {
 background:#FFF url(imagenes/web.png) no-repeat;
 border-radius:2px 0px 0px 2px;

}

textarea.comentario {
 clear:both;
 width:444px;
 display:block;
 padding:8px 11px 8px 11px;
 font-family:"Raleway", Arial, Helvetica, sans-serif;
 font-size:18px;
 border:#CCC 1px solid;
 border-radius:18px 2px 2px 0px;
 color:#CCC;
 margin:9px 1px 9px 1px;
 transition:all ease-in-out .3s;
 float:left;
 resize:none;
}
textarea.comentario:hover {
 color:#666;
 box-shadow:2px 2px 2px #EEE,-2px -2px 2px #EEE;
 border:#666 1px solid;

}
input[type=submit] {
 width:99.4%;
 clear:both;
 background:#FFF;
 display:block;
 padding:8px 11px 8px 11px;
 font-family:"Raleway", Arial, Helvetica, sans-serif;
 font-size:18px;
 border:#CCC 1px solid;
 border-radius:0px 0px 18px 18px;
 color:#CCC;
 margin:9px 1px 9px 1px;
 transition:all ease-in-out .3s;

}
input[type=submit]:hover {
 color:#666;
 box-shadow:2px 2px 2px #EEE,-2px -2px 2px #EEE;
 border:#666 1px solid;

}
#comentarios {
 display:block;
 width:70%;
 padding:4px 4px 4px 12px;
 font-family:'Raleway',sans-serif;

}
#comentarios:hover {
}
#comentarios a {
 color:#FFF;
 text-decoration:none;
 transition:all ease-out .3s;

}
#comentarios a:hover {
 color:#EEE;
}

#comentarios .user {
 clear:both;
 padding:4px 9px 4px 9px;
 margin:4px 0px 4px 4px;
 float:left;
 width:30%;
 background:#003;
 border-radius:4px 0px 0px 4px;
 font-weight:bold;
 color:#FFF;

}
#comentarios .comment {
 border:1px solid #003;
 margin:4px 4px 4px 0px;
 padding:18px 9px 18px 9px;
 float:left;
 width:61%;
 border-radius:0px 4px 4px 0px;

}
#comentarios .comment a {
 transition:all ease-in .2s;
 color:#999;
}
#comentarios .comment img {
 width:93%;
 border:7px solid #FFF;
 box-shadow:2px 2px 4px #003;
}
#comentarios .comment a:hover {
 font-weight:bold;
}
.tiempo {
 text-align:right;
 text-transform:uppercase;
 font-size:10px;
}
</style>
</head>


<body>

<?php
include('comentarios.php');
?><br/><br/><br/>

<form action="enviar.php" method="post">
<textarea class="comentario" name="comentario" cols="29" rows="6" aria-required="true" ></textarea>
<div id="datos">
<input type="text" size="20" name="usuario" class="nombre" placeholder="Nombre de usuario" required="required" autocomplete="off" />
<input type="text" size="20" name="email" class="email" placeholder="Correo eléctronico" required="required" autocomplete="off"/>
<input type="text" size="20" name="website" class="website" placeholder="Sitio web" autocomplete="off" />
</div>

<input type="submit" value="Enviar" name="enviar"/>
</form>
</body>
</html>