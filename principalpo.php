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
		    <th>Productos</th>
		    <th>Precio</th>
		    <th class="text-center"><button type="button" class="btn btn-default glyphicon glyphicon-plus btn-success" id="a$id"></button></th>
		    <input value='$id' type='hidden' id='ta$id'>
	    </thead>
	 
	    <tbody>
		    <?php
		    include 'conexion.php';
		    $query="SELECT * FROM populares";
		    $resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
		    while($row = $resultado->fetch_assoc()) {
				$id=$row["id"];
				$producto=$row["producto"];
				$precio=$row["precio"];
				echo "<tr><td class='text-center'>$id</td>";
				echo "<td>$producto</td>";
				echo "<td>$precio</td>";
				echo "<td class='text-center'><button type='button' class='btn btn-default glyphicon glyphicon-pencil btn-warning' id='m$id'></utton>";
				echo "<input value='$id' type='hidden' id='tm$id'>";	
				echo "<input value='$id' type='hidden' id='te$id'>";	
				echo "<button type='button' class='btn btn-default glyphicon glyphicon-minus btn-danger' id='e$id'></button></td></tr>";  
		    }
		    } else {

		    }
		    ?>
	    </tbody>
	</table>
	</div> 
	</body>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
	<script  type="text/javascript" src="js/conectapo.js"></script>		   
	 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
</html>
