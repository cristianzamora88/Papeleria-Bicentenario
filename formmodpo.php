<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
	<form action="modificarpo.php" method="post" name="form">
<center>
<div class="col-md-4" >
		<div class="form-group">
		<input class="form-control input-lg" type="text" placeholder="ID" name="id"><br></br>
		</div>
		<div class="form-group">
		<input class="form-control input-lg" type="text" placeholder="PRODUCTO" name="producto"><br></br>
		</div>
		<div class="form-group">
		<input class="form-control input-lg" type="text" placeholder="PRECIO" name="precio"><br></br>
		</div>
		<div class="form-group">
		<input class="btn btn-primary btn-lg btn-block" type="submit" value="ACTUALIZAR DATOS">
		</div>
	</form>
      </div>
              </div>
          </center>
  <div class="overlay"></div>
 </header>



<script type="text/javascript">  
       
var paramstr = window.location.search.substr(1);
var paramarr = paramstr.split ("&");
var params = {};
var num=paramstr.substring(3,)

document.forms['form']['id'].value = num;
</script>

</body>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
	<script  type="text/javascript" src="js/conectapo.js"></script>
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