$(document).ready(function(){
	
	MostrarGrilla();
	
});

function MostrarGrilla(){
	
    var pagina =	 "./administracion.php";

    LimpiarInput();
    
	$.ajax({
        type: 'POST',
        url: pagina,
		data : { queHago : "mostrarGrilla"},
        dataType: "html",
        async: true
    })
	.done(function (grilla) {

		$("#divGrilla").html(grilla);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });   
}

function SubirFoto(){
	
    var pagina = "./administracion.php";
	var foto = $("#archivo").val();
	
	if(foto === "")
	{
		return;
	}

	var archivo = $("#archivo")[0];
	var formData = new FormData();
	formData.append("archivo",archivo.files[0]);
	formData.append("queHago", "subirFoto");

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
		$("#divFoto").html(objJson.Html);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });   
}

function BorrarFoto(){

	var pagina = "./administracion.php";
	var foto = $("#hdnArchivoTemp").val();
	
	if(foto === "")
	{
		alert("No hay foto que borrar!!!");
		return;
	}
	
	$.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        data: {
			queHago : "borrarFoto",
			foto : foto
		},
        async: true
    })
	.done(function (objJson) {

		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		
		$("#divFoto").html("");
		$("#hdnArchivoTemp").val("");
		$("#archivo").val("");	

	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });   	
	
	return;
}

function AgregarPersona(){
	
    var pagina = "./administracion.php";
	var edad = $("#edad").val();
	var nombre = $("#nombre").val();
	var correo = $("#correo").val();
	var clave = $("#clave").val();
	var archivo = $("#hdnArchivoTemp").val();
	var queHago = $("#hdnQueHago").val();
	
	var persona = {};
	persona.nombre = nombre;
	persona.edad = edad;
	persona.correo = correo;
	persona.clave = clave;
	persona.archivo = archivo;

	if(!Validar(persona)){
		alert("Debe completar TODOS los campos!!!");
		return;
	}
	
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        data: {
			queHago : queHago,
			persona : persona
		},
        async: true
    })
	.done(function (objJson) {
		
		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		
		alert(objJson.Mensaje);
		
		BorrarFoto();
		
		$("#edad").val("");
		$("#nombre").val("");
		
		MostrarGrilla();

		if(queHago !== "agregar"){
			$("#hdnQueHago").val("agregar");
			$("#nombre").removeAttr("readonly");
		}
		
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    
		
}

function Eliminarpersona(persona){
	
	if(!confirm("Desea ELIMINAR el persona "+persona.nombre+"??")){
		return;
	}
	
    var pagina = "./administracion.php";
	
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        data: {
			queHago : "eliminar",
			persona : persona
		},
        async: true
    })
	.done(function (objJson) {
		
		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		
		alert(objJson.Mensaje);
		
		MostrarGrilla();

	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    
	
}
function Modificarpersona(persona){

	$("#edad").val(persona.edad);
	$("#nombre").val(persona.nombre);
	$("#hdnArchivoTemp").val(persona.archTmp);
	$("#correo").val(persona.correo);
	$("#hdnLimpiar").prop('display', 'inline');
	$("#divFoto").html("<img src=archivos/"+persona.archTmp+" width='100px' height='100px' alt=/>");

	$("#hdnQueHago").val("modificar");
	
	$("#nombre").attr("readonly", "readonly");
}

function Validar(objJson){

	alert("implementar validaciones...");
	//aplicar validaciones



	return true;
}


function LimpiarInput(){

		$("#divFoto").html("");
		$("#hdnArchivoTemp").val("");
		$("#archivo").val("");
		$("#edad").val("");
		$("#nombre").val("");
		$("#correo").val("");
		$("#clave").val("");

}