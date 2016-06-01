function BorrarCD(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarCD(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		var cd =JSON.parse(retorno);	
		$("#idCD").val(cd.id);
		$("#cantante").val(cd.cantante);
		$("#titulo").val(cd.titulo);
		$("#anio").val(cd.año);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	Mostrar("MostrarFormAlta");
}

function GuardarEntidad()
{
		//var id=$("#idCD").val();
		var marca=$("#marca").val();
		var descripcion=$("#descripcion").val();
		var fecha=$("#fecha").val();
		var tipo=$("#tipo").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarCD",
			id:id,
			marca:marca,
			descripcion:descripcion,
			fecha:fecha	
		}
	});
	funcionAjax.done(function(retorno){
			Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}