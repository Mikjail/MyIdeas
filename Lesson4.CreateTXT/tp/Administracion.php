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
	 $path = $_FILES['Foto']['tmp_name'];


	/************************************************************VALIDACIONES***************************************************/

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
	if (file_exists("archivosTP3/fotos/".$apellido."-".$nombre."_.".$tipoExtensionObtenida[1])) {
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

/*******************************************************************DATA ENTRY**********************************************************/

	//EN CASO DE NO HABER ERRORES SE VAN A CREAR LAS EXTENSIONES
	if (!$errorCargaArchivo) {
		

		//CREO LAS RUTAS DONDE SE GUARDARAN LOS ARCHIVOS
		$urlTxt= "archivosTP3/empleados.txt";
		$urlFoto= "archivosTP3/fotos/".$apellido."-".$nombre.".".$tipoExtensionObtenida[1];


		//CREO LA INSTANCIA DE EMPLEADO
		$empleado = new Empleado($nombre, $dni, $apellido, $sexo, $legajo, $sueldo, $urlFoto);


		//CREO EL ARCHIVO TXT
		$archivo=fopen($urlTxt, "a");
		$linea = $empleado->toString()."\n";
		fwrite($archivo, $linea);
		fclose($archivo);	


		//CREO LA IMAGEN
		$archivo2 = fopen("archivosTP3/fotos/".$apellido."-".$nombre.".".$tipoExtensionObtenida[1], "w");
		move_uploaded_file($path, $urlFoto);
		fclose($archivo2);

		echo "<a href='Mostrar.php'>Los datos fueron enviados!</a>" ;
	}	
	
	else{
			var_dump($_FILES);
			echo "Hay un error en la carga de Archivo";
	
	}

}
 ?>