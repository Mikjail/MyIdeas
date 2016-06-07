function BorrarEntidad(idParametro)
{
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarEntidad",
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

function EditarEntidad(idParametro)
{
	
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerEntidad",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){

		var entidad = JSON.parse(retorno);
		$("#divFoto").css("display", "inline");
		$("#divFoto").html("<img src=./img/"+entidad.id+entidad.descripcion+".jpg width='100px' height='100px' style='border: 1px solid black'></img>");
		$("#idEntidad").val(entidad.id);
		$("#descripcion").val(entidad.descripcion);
		$("#fecha").val(entidad.fecha);
		$("#tipo option[value="+entidad.tipo+"]").prop("selected",true);
		$("#fotoDescr").val(entidad.id+entidad.descripcion);
	

		//Clear radio button checked before
	
		$(".marca1.marca2.marca3").prop("checked", false);

		if($(".marca1").val() == entidad.marca){
			$(".marca1").prop("checked", true);
		}
		else if($(".marca2").val()==entidad.marca){
			$(".marca2").prop("checked", true);	
			}
			else{
				$(".marca3").prop("checked", true);
				}
	});

	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	
}

function BorrarFoto(datosFoto){

	var funcionAjax = $.ajax({
			url: "nexo.php",
			type: "post",
			data:{
				queHacer:"BorrarFoto",
				edicion:datosFoto
				}
		});

	funcionAjax.done(function(retorno){
		$("#informe").html("Informe: "+ retorno);	
	});

	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText+"Algo esta mal!");	
	});	
}

function GuardarEntidad()
{
	var id = $("#idEntidad").val();
	var cambiaFoto=$("#cambiaFoto").val();
	var marca=$("#marca:checked").val();
	var descripcion=$("#descripcion").val();
	var fecha=$("#fecha").val();
	var tipo=$("#tipo option:selected").val();
	var descFoto=$("#fotoDescr").val();
		//alert(id+" "+marca +" "+ descripcion+" "+fecha+" "+tipo+""archivo);
		if (cambiaFoto != 0) {
		//Llevo a la carpeta temporal la foto para que su nombre sea modificado
		BorrarFoto("img/"+descFoto+".jpg");		
		}

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarEntidad",
			id:id,
			marca:marca,
			descripcion:descripcion,
			fecha:fecha,	
			tipo:tipo
		}
	});
	funcionAjax.done(function(retorno){
		$("#informe").html("Informe: " + retorno);
		Mostrar("MostrarGrilla");
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText+"Algo esta mal!");	
	});

}

function SubirFoto(){
	
    var pagina = "./nexo.php";
	var foto = $("#archivo").val();
	
	if(foto === "")
	{
		return;
	}

	var archivo = $("#archivo")[0];
	var formData = new FormData();
	formData.append("archivo",archivo.files[0]);
	formData.append("queHacer", "subirFoto");
	$("#divFoto").css("display","none");
	
	if ($("#fotoDescr").val() != 0){
		$("#cambiaFoto").val(1);
	}
	
	$.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
		cache: false,
		contentType: false,
		processData: false,
        data: formData,
        async: true
    })
	.done(function (objJson) {

		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		else{
			$("#divFoto").css("display","block");
			$("#divFoto").html("<img src=./temp/temporal.jpg width='100px' height='100px' style='border: 1px solid black'></img>");
		}
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });   
}