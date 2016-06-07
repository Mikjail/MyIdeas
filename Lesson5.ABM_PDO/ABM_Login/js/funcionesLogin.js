function validarLogin()
{
	var usuario;
	var clave;
	var recordar;

	usuario = $("#user").val();
	clave = $("#password").val();
	recordar = $("#rememberMe").is(":checked");

	alert(usuario+" "+clave+" "+recordar);

	var funcionAjax=$.ajax({
		type: "post",
		url: "php/validarUsuario.php",
		data: 
		{
		usuario:usuario,
		clave:clave,
		recordarme:recordar
		}
	});

	funcionAjax.done(function (respuesta){

		if (respuesta == "exito" ) {
		
			$("form").submit();
		}
		alert(respuesta);
	});
	
	funcionAjax.fail(function (respuesta){
		
		alert(respuesta);
	});
		
}
function deslogear()
{	

	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
		location.reload();		
	});	
	
}