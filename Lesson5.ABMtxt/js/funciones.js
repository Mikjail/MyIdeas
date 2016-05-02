$(document).ready(function ()){
	MostrarGrilla();
});

function MostraGrila(){

	var pagina= "./administracion.php";

	$.ajax({
		type: 'POST',
		url: pagina,
		data: { queHago : "mostrarGrilla"},
		dataType: "html",
		async: true
	})
	.done(function (grilla)){
		$('#divGrilla').html(grilla);
	})
	.fail(function (jqXHR, textStatus, ErrorThrown){
		alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
	});

}

function SubirFoto(){
	var pagina = "./administacion.php";
	var foto = $("#archivo").val();

	if(foto == ""){
		return;
	}

	var archivo = $("#archivo")[0];
	var formData = new FormData();
	formData.append("archivo",archivo.files[0]);
	formData.appen("queHago","subirFoto");

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
	.done(function (objJson){
		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		$("#divFoto").html(objJson.Html);
	})
	.fail(function (jqXHR, textStatus, errorThrown)){
		alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
	});
}

function BorrarFoto(){
	var pagina = "./administracion.php";
	var foto = $('#hdnArchivoTemp').val();

	if(foto == ""){
		alert("No hay foto que borrar");
		return;
	}

	$.ajax({
		url: pagina,
		type: 'POST',
		dataType: "json",
		data: {
			queHago: "borrarFoto"
			foto : foto
		},
		async: true
	})
	.done(function (objJson) {
		if (!objJson.Exito) {
			alert(objJson.Mensaje);
			return;
		}
		$("#divFoto").html("");
		$("#hdnArchivoTemp").val("");
		$("#archivo").val("");
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
		alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
	})

	return;
}

function AgregarProducto(){
	var pagina = "./administracion.php";
	var codBarra = $("#codBarra").val();
	var nombre = $("#nombre").val();
	var archivo = $("#hdnArchivoTemp").val();
	var queHago = $("#hdnQueHago").val();

	var producto = {};
	producto.nombre = nombre;
	producto.codBarra = codBarra;
	producto.archivo = archivo;

	if(!Validar(producto)){
		alert("debe completar TODOS los campos!!!");
		return;
	}

	$.ajax({
		type: 'POST',
		url: pagina,
		dataType: "json",
		data: {
			queHago : queHago,
			producto : producto
		},
		asyn: true
	})
	.done(function (objJson)){
		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		alert(objJson.Mensaje);

		BorrarFoto();

		$("#codBarra").val("");
		$("#nombre").val("");

		MostrarGrilla();

		if(queHago !== "agregar"){
			$("#hdnQueHago").val("agregar");
			$("#codBarra").removeAttr("readonly");
		}
	}
	.fail(function (jqXHR, textStatus, errorThrown) {
	alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
	});
}

function ELiminarProduct(producto){
	if(!confirm("Desea Eliminar el producto"+product.nombre+"??")){
		return;
	}
	var pagina = "./adiministracion.php";

	$.$.ajax({
		url: pagina,
		type: 'POST',
		dataType: 'json',
		data: {
			queHago : "eliminar"
			producto : producto 
		},
		async: true
	})
	.done(function (objJson) {
		if (!objJson.Exito) {

			alert(objJson.Mensaje);
		};

		alert(objJson.Mesaje);

		MostrarGrilla();
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
		aler(jqXHR.responseText + "\n"+textStatus + "\n" + errorThrown);
	})	
}

function ModificarProducto(objJson){
	
	$("#codBarra").val(objJson.codBarra);
	
	$("#nombre").val(objJson.nombre);

	$("#hdnQueHago").val("modificar");
	
	$("#codBarra").attr("readonly","readonly");
}

function Validar(objJson){
	alert("implementar validaciones...");

	return true;
}