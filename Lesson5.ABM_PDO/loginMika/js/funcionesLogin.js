function validarLogin()
{
	var usuario;
	var clave;
	var recordar;

	usuario = $("#user").val();
	clave = $("#password").val();
	recordar = $("#rememberMe").is(":checked");

	alert(usuario, clave, recordar);
	var funcionAjax=$.ajax({
		type: "POST",
		url: "php/validarUsuario.php",
		data: 
		{
		usuario : usuario,
		clave : clave,
		recordarme : recordar
		}
	});

	funcionAjax.done(function (respuesta){
		alert(respuesta);
	});

	Mostrar('MostrarLogin');
		
}
function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
		
			MostarLogin();
			$("#usuario").val("Sin usuario.");
			$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");
			
	});	
	Mostrar('MostrarLogin');
}