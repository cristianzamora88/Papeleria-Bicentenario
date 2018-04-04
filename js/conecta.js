$(document).ready( function () {
	$("#btnAdd").on('click', function(event) {
		event.preventDefault();
		
		hacerOperaciones();
	});	
	

$("button").on('click', function(event) {
		var id="t"+this.id;	
		
		if (id.indexOf("m") !=-1) {
			var id_mod = document.getElementById(id).value;
			if(confirm("Modificar el registro"))
			{
			$.ajax({
	        type: "POST",
	        url: "mod.php",
	        success : function(){
	                window.location.href = "mod.php?id="+id_mod;
	        	}
	    	});
		}
		}

		if (id.indexOf("e") !=-1) {
			var id_eliminar = document.getElementById(id).value;
			if(confirm("Eliminar el registro"))
			{	
			$.ajax({
	        type: "POST",
	        url: "eliminar.php",
	        success : function(){
	                window.location.href = "eliminar.php?id="+id_eliminar;
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
	        url: "in.php",
	        success : function(){
	                window.location.href = "in.php?id="+id_in;
	        	}
	    	});
		}
		}

	});	


	function hacerOperaciones(){
		var usuario = $("#usuario").val();
		var password = $("#password").val();

		if(usuario=="" || password=="")
		{
			alert("Ingresa un Usuario o Password");
		}
		else 
		{   
				$.ajax({
					type: "POST",
					url: "valida.php",
					  success : function(){
					   window.location.href = "valida.php?usuario="+usuario+"&password="+password;
					    }
			    	        });
		}	
	};

});	
