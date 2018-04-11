<!DOCTYPE html>
<html>
  <head>

    <title>Registro</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  </head>
<body align="center">

<header class="masthead d-flex">
      <div class="container text-center my-auto">
	<form action="concomentario.php" method="post" name="form">
		<center>
<div class="col-md-4" >  
    <div class="form-group">
    <input type="text" class="form-control input-lg" type="text" placeholder="NOMBRES" name="nombres" required="requerido">
        </div>
    <div class="form-group">
    <input class="form-control input-lg" type="text" placeholder="APELLIDOS" name="apellidos" required="requerido">
        </div>
    <div class="form-group">
    <input class="form-control input-lg" type="text" placeholder="CORREO" name="correo" required="requerido">
        </div>
        <div class="form-group">
    <input type="text" class="form-control input-lg"  placeholder="TELEFONO" name="telefono" required="requerido">
        </div>
    <div class="form-group">
   <textarea type="text" class="form-control input-lg"  placeholder="COMENTARIO" name="comentario" maxlength="500" cols="30" rows="5" required="requerido"></textarea>
        </div>
		<div class="form-group">
		<input class="btn btn-primary btn-lg btn-block" type="submit" value="ENVIAR">
				</div>
                       <center>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="principal.html">Regresar</a>
      </center>
	</form>
	</div>
	      </div>
	      </center>
  <div class="overlay"></div>
 </header>
</body>

<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>  
<script  type="text/javascript" src="js/conecta.js"></script> 
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
</html>