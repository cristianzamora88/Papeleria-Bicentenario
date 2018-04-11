$(document).ready( function () {
	$("button").on('click', function(event) {
		var id="t"+this.id;	
		
		if (id.indexOf("m") !=-1) {
			var id_mod = document.getElementById(id).value;
			if(confirm("Modificar el registro"))
			{

			$.ajax({
	        type: "POST",
	        url: "modin.php",
	        success : function(){
	                window.location.href = "formmodin.php?id="+id_mod;
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
	        url: "eliminarin.php",
	        success : function(){
	                window.location.href = "eliminarin.php?id="+id_eliminar;
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
	        url: "inin.php",
	        success : function(){
	                window.location.href = "inin.php?id="+id_in;
	        	}
	    	});
		}
		}

	});	
});	
