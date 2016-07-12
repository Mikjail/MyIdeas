function ValidarModificacion(){
	clave = $("#password").val();

	alert(clave);
	var funcionAjax = $.ajax({
		type: "post",
		url:"php/validarUsuario.php",
		data:
		{
			clave:clave,
			queHacer:"validarModificacion"
		}
	});
	funcionAjax.done(function (respuesta){

		if (respuesta == "exito" ) {
		
			$(".inputFormul").attr("readonly",true);
			GuardarUsuario();
		}
		alert(respuesta);
	});	
	
	funcionAjax.fail(function (respuesta){
		
		alert(respuesta);
	});
}

function ValidarLogin()
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
		recordarme:recordar,
		queHacer: "validarLogin"
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