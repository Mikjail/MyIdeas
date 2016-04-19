<?php  include("administracion.php");

$archivo = fopen("archivosTP3/empleados.txt", "r");
$listaEmpleados = array();


while(!feof($archivo)){
	$linea = fgets($archivo);
	$empleado = explode("<br>", $linea);
	
	if ($empleado[0] != "") {
	
	 $nombre= $empleado[0];
	 $apellido = $empleado[1];
	 $dni = (int)$empleado[2];
	 $sexo = $empleado[3];
	 $legajo = (int)$empleado[4];
	 $sueldo = (double)$empleado[5];

	 	 $listaEmpleados[] = new Empleado($nombre, $dni, $apellido, $sexo, $legajo, $sueldo);
	}

}
	fclose($archivo);

	foreach ($listaEmpleados as $lista) {
		
		echo $lista->toString();
	}