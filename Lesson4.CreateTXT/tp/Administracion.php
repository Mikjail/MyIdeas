<?php 
	include_once("Empleado.php");

	if(isset($_POST["Nombre"]) && isset($_POST["Apellido"]) && isset($_POST["Sexo"]) && isset($_POST["Dni"]) ){

	//ESTABLEZCO DATOS REQUERIDOS
	 $tipoDatosRequerido = array
	 (
	 array("jpg", "bmp", "gif", "png", "jpeg"),
	 array("image/jpg", "image/bmp", "image/gif","image/png", "image/jpeg" )
	 );
	 $errorCargaArchivo = false;

	 //OBTENGO DATOS
	 $nombre= $_POST["Nombre"];
	 $apellido = $_POST["Apellido"];
	 $sexo = $_POST["Sexo"];
	 $dni = (int)$_POST["Dni"];
	 $legajo = (int)$_POST["Legajo"];
	 $sueldo = (double)$_POST["Sueldo"];
     $tipoExtensionObtenida = explode('.', $_FILES['Foto']['name']);
	 $tipoDatoObtenido = $_FILES['Foto']['type'];
	 $ruta = $_POST['Foto']['name'];


	//VALIDO QUE ESTEN LOS DATOS CORRECTOS.

	for ($j=0; $j < sizeof($tipoDatosRequerido[0]); $j++) { 
	 
	 	 if ($tipoDatosRequerido[0][$j] != $tipoExtensionObtenida[1] && $tipoDatosRequerido[1][$j] != $tipoExtensionObtenida[1]) {
	 	 	$errorCargaArchivo = true;
	 	 }
	 	 else{
	 	 	$errorCargaArchivo = false;
	 	 	break;
	 	 }
	 }

	 //VALIDO QUE EL ARCHIVO YA SE HAYA CARGADO.
	if (file_exists("archivosTP4/".$apellido."-".$nombre."_.".$tipoExtensionObtenida[1])) {
			$errorCargaArchivo= true;
			echo "Los datos que esta intentado cargar ya existen";
	}

	//VALIDO QUE EL ARCHIVO TXT YA CONTENGA LOS DATOS.
	
	$archivo = fopen("archivosTP3/empleados.txt", "r");
	
	while(!feof($archivo)){
	
	$linea = fgets($archivo);
	$empleado = explode("<br>", $linea);
		
		if ($empleado[0] == $nombre) {
			$errorCargaArchivo = true;
			break;
		}

	}
	fclose($archivo);


	if (!$errorCargaArchivo) {
		//CREO LA INSTANCIA DE EMPLEADO
		$empleado = new Empleado($nombre, $dni, $apellido, $sexo, $legajo, $sueldo);
		
		$archivo=fopen("archivosTP3/empleados.txt", "a");
		$linea = $empleado->toString()."\n";
		fwrite($archivo, $linea);
		fclose($archivo);	


		$archivo2 = fopen("archivosTP4/".$apellido."-".$nombre.$tipoExtensionObtenida[1], "w");
		$linea = $


		echo "<a href='Mostrar.php'>Los datos fueron enviados!</a>" ;
	}	
	
	else{
			echo "Hay un error en la carga de Archivo";
	
	}

}
 ?>