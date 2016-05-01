<?php 
	include_once("fabrica.php");

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
	 $ubicacionArchivo = $_FILES['Foto']['tmp_name'];


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

	if (file_exists("archivosTP3/".$nombre."_".$apellido.".".$tipoExtensionObtenida[1])) {
			$errorCargaArchivo= true;
			echo "Los datos que esta intentado cargar ya existen";
	}




	 if (!$errorCargaArchivo) {
	//CREO LA INSTANCIA DE EMPLEADO
	$nombreArchivo = "archivosTP3/".$nombre."_".$apellido.".".$tipoExtensionObtenida[1];
	$empleado = new Empleado($nombre, $dni, $apellido, $sexo, $legajo, $sueldo, $nombreArchivo);
	
	move_uploaded_file($ubicacionArchivo, $empleado->getPath());	
	$miFabrica = new Fabrica("MikaFabrica");
	$miFabrica->AgregarEmpleado($empleado);
	Fabrica::Guardar($miFabrica);

	echo "<a href='Mostrar.php'>Ver empleados agregados</a>";

	}else{
 	echo "Hay un error en la carga de Archivo".
 	"<br><a href='Form.html'>volver</a>";
	}
}