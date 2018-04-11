<!DOCTYPE html>
<html>
	<head>
		<title>Papeler&iacutea Bicentenario</title>			
		<link href="vendor/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body background="img\bg-masthead.jpg" align="center">
	<div>&nbsp;</div>
	<div class="container">

	    <table id="example" class="table table-bordered table-hover" cellspacing="0" width="100%">
	    <thead>
		<tr class="h3">
		    <th class="text-center">Id</th>
		    <th>Trabajos y Tareas</th>
		    <th>Precio</th>
	    </thead>
	 
	    <tbody>
		    <?php
		    include 'conexion.php';
		    $query="SELECT * FROM trabajos";
		    $resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
		    while($row = $resultado->fetch_assoc()) {
				$id=$row["id"];
				$producto=$row["producto"];
				$precio=$row["precio"];
				echo "<tr><td class='text-center'>$id</td>";
				echo "<td>$producto</td>";
				echo "<td>$precio</td></tr>";

		    }
		    } else {

		    }
		    ?>
	    </tbody>
	</table>
	</div> 
	   <center>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="index.html">Regresar</a>
      </center>
	</body>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
	<script  type="text/javascript" src="js/conectatr.js"></script>	
		 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
</html>
