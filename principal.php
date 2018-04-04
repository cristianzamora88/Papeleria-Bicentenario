<!DOCTYPE html>
<html>
	<head>
		<title>Reporte Bootstrap</title>		
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body align="center">
	<div>&nbsp;</div>
	<div class="container">

	    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	    <thead>
		<tr class="h3">
		    <th class="text-center">ID</th>
		    <th>NOMBRES</th>
		    <th>APELLIDO PATERNO</th>
		    <th>APELLIDO MATERNO</th>
		    <th>CORREO</th>
		    <th>USUARIOS</th>
		    <th>PASSWORD</th>
		    <th class="text-center"><button type="button" class="btn btn-default glyphicon glyphicon-plus btn-success" id="a$id"></button></th>
		    <input value='$id' type='hidden' id='ta$id'>;
		</tr>
	    </thead>
	 
	    <tbody>
		    <?php
		    include 'conexion.php';
		    $query="SELECT * FROM registro";
		    $resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
		    while($row = $resultado->fetch_assoc()) {
				$id=$row["id"];
				$nombres=$row["nombres"];
				$paterno=$row["paterno"];
				$materno=$row["materno"];
				$correo=$row["correo"];
				$usuario=$row["usuario"];
				$password=$row["password"];
				echo "<tr><td class='text-center'>$id</td>";
				echo "<td>$nombres</td>";
				echo "<td>$paterno</td>";
				echo "<td>$materno</td>";
				echo "<td>$correo</td>";
				echo "<td>$usuario</td>";
				echo "<td>$password</td>";
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
	<script  type="text/javascript" src="js/conecta.js"></script>	
</html>
