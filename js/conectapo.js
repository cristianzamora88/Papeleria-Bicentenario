$(document).ready( function () {
	$("button").on('click', function(event) {
		var id="t"+this.id;	
		
		if (id.indexOf("m") !=-1) {
			var id_mod = document.getElementById(id).value;
			if(confirm("Modificar el registro"))
			{

			$.ajax({
	        type: "POST",
	        url: "modpo.php",
	        success : function(){
	                window.location.href = "formmodpo.php?id="+id_mod;
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
	        url: "eliminarpo.php",
	        success : function(){
	                window.location.href = "eliminarpo.php?id="+id_eliminar;
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
	        url: "inpo.php",
	        success : function(){
	                window.location.href = "inpo.php?id="+id_in;
	        	}
	    	});
		}
		}

	});	
});	
