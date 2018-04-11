$(document).ready( function () {
	$("button").on('click', function(event) {
		var id="t"+this.id;	
		
		if (id.indexOf("m") !=-1) {
			var id_mod = document.getElementById(id).value;
			if(confirm("Modificar el registro"))
			{

			$.ajax({
	        type: "POST",
	        url: "modtr.php",
	        success : function(){
	                window.location.href = "formmodtr.php?id="+id_mod;
	        	}
	    	});
		}
		else{
			alert('no conectado');
		}
		}

		if (id.indexOf("e") !=-1) {
			var id_eliminar = document.getElementById(id).value;
			if(confirm("Eliminar el registro"))
			{	
			$.ajax({
	        type: "POST",
	        url: "eliminartr.php",
	        success : function(){
	                window.location.href = "eliminartr.php?id="+id_eliminar;
	        	}
	    	});
		}
		}

	   if (id.indexOf("a") !=-1) {
			var id_in = document.getElementById(id).value;
			if(confirm("Agregar un registro"))
			{
			$.ajax({
	        type: "POST",
	        url: "intr.php",
	        success : function(){
	                window.location.href = "intr.php?id="+id_in;
	        	}
	    	});
		}
		}

	});	
});	
