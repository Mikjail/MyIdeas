
function MostrarError()
{
	var funcionAjax=$.ajax({url:"nexoNoExiste.php",type:"post",data:{queHacer:"MostrarTexto"}});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto!!!");
	});
	funcionAjax.fail(function(retorno){
			$("#principal").html("error :(");
		$("#informe").html(retorno.responseText);		
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);
	});
}

function Mostrar(queMostrar)
{

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#home").html(retorno);
		//$("#informe").html("Correcto!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#home").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	
}

function CambiarSignAndLog(queHacer){
	
	if (queHacer == "MostrarSignUp") {	
	$("#form").toggle("fast");
	$("#home").css("display","block");
	};

	if (queHacer == "MostrarLogIn") {
	$("#home").toggle("fast");
	$("#form").toggle("fast");		
	};

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queHacer}
	});
	
	funcionAjax.done(function(retorno){
	if (queHacer == "MostrarSignUp") {			
		$("#home").html(retorno);
	}
	
		//$("#informe").html("Correcto!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#home").html(":(");
		$("#informe").html(retorno.responseText);	
	});
}

