function BorrarUsuario(idParametro)
{
		var funcionAjax=$.ajax({
		url:"nexoUsuario.php",
		type:"post",
		data:{
			queHacer:"BorrarUsuario",
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

function GuardarUsuario()
{

	var id = $("#idEntidad").val();
	var tipo=$("#tipo:checked").val();
	var nombre=$("#nombre").val();
	var mail=$("#mail").val();
	var clave=$("#clave").val();
	var descFoto=$("#fotoDescr").val();
		
	var funcionAjax=$.ajax({
		url:"nexoUsuario.php",
		type:"post",
		data:{
			queHacer:"GuardarUsuario",
			id:id,
			clave:clave,
			nombre:nombre,
			mail:mail,	
			tipo:tipo
		}
	});
	funcionAjax.done(function(retorno){
		$("#informe").html("Informe: " + retorno);
		location.reload();
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText+"Algo esta mal!");	
		alert(retorno);
		CambiarSignAndLog("MostrarLogIn");
	});

}
function SubirFotoUsuario(){
	
    var pagina = "./nexoUsuario.php";
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
			$("#divFoto").html("<img src=./tempusu/temporal.jpg width='100px' height='100px' style='border: 1px solid black'></img>");
		}
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });   
}

function ModificarUsuario(){
	alert("dasda");

	$(".inputFormul").attr("readonly",false);
	$(".inputFormul").css("border-color", "#3AAE63");
	$("#inputMostrar").show();
	$(".helpValidacion").show();
	$("#btnModificar").toggle();
	$("#btnGuardar").toggle();
}