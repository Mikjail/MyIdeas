function EnviarDatos(){

	var nombre = document.getElementById("inputName");
	var apellido = document.getElementById("inputLastName");
	var dni = document.getElementById("inputDni");
	var legajo = document.getElementById("inputLegajo");
	var sueldo = document.getElementById("inputSueldo");

	var errores = [];

	
	if(!ValidarStrings(nombre)) {
		errores.push(nombre);
		alert("-El "+nombre.name+" no debe tener numeros, debe ser menor a 10 caraceteres y no debe estar vacío");
	}

	if(!ValidarStrings(apellido)){
		errores.push(apellido);
		
		alert("-El "+apellido.name+" no debe tener numeros, debe ser menor a 10 caraceteres y no debe estar vacío");
	}

	if(!ValidarNumeros(dni)){
		errores.push(dni);

		alert("-El "+dni.name+" no debe tener letras, debe ser menor a 10 caraceteres y no debe estar vacío");
	}	

	if (!ValidarNumeros(legajo)) {
		errores.push(legajo);
		alert("-El "+legajo.name+" no debe tener letras, debe ser menor a 10 caraceteres y no debe estar vacío");
	}

	if(!ValidarNumeros(sueldo)) {
		errores.push(sueldo);

		alert("-El "+sueldo.name+" no debe tener letras, debe ser menor a 10 caraceteres y no debe estar vacío");
	}

	MostrarErrores(errores);

}

function ValidarNumeros(inputNumerico){

		if (!isNaN(inputNumerico.value) &&
			inputNumerico.value != "" &&
			inputNumerico.value != null &&
			inputNumerico.value.length < 10)
		{
			return true;
		}
	
	return false;
}

function ValidarStrings(inputCaracteres){

	if (isNaN(inputCaracteres.value) &&
		 inputCaracteres.value != "" && 
		 inputCaracteres.value.length < 10 &&
		 inputCaracteres.value != null)
	{
			return true;
	}		
	
	return false;
}

function MostrarErrores(arrayIdErrores){
	if (arrayIdErrores.length>0) 
		{	
		var mensaje= "Error al completar los campos: \n";
		
		for (var i = 0; i < arrayIdErrores.length; i++){
			mensaje += arrayIdErrores[i].name+"\n";
		}
		alert(mensaje);
	}

}