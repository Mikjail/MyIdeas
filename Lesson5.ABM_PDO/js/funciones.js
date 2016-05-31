function BorrarPorIdOrNombre(parametroNombreOrID){
	var pagina ="./administracion.php";
	var queHago;

	if(isNaN(parametroNombreOrID){
		queHago = "BorrarPersonaPorNombre";
	}
	else{
		queHago = "BorrarPersonaPorID";
	}

		$.ajax({
			type: 'POST',
			url: pagina,
			data: {
				queHago : queHago,
				id : parametroNombreOrID
			},
			datatype: "json",
			async: true
		})

	.done(function (retorno) {

		alert(retorno);
		return;
		if(!retorno.Exito){
			alert("Hubo un error en la tabla: "+ retorno);
			return;
		}
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });   


}

function Modificar(id){
	var pagina ="./administracion.php";


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
