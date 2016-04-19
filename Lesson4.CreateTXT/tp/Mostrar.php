<?php  include("administracion.php");

$archivo = fopen("archivosTP3/empleados.txt");
while(!feof($archivo)){
	$linea = fgets($archivo);
	$empleado = explode("<br>", $linea);
	
	$empleado[0] = trim($empleado[0]);

	if($empleado[0]!=""){
		$listaEmpleados[]=$empleado[];
	}

	fclose($archivo);

	 $nombre= $empleado[0];
	 $apellido = $empleado[1];
	 $dni = (int)$empleado[2];
	 $sexo = $empleado[3];
	 $legajo = (int)$empleado[4];
	 $sueldo = (double)$empleado[5];

	$muestroEmpleado = new Empleado($nombre, $dni, $apellido, $sexo, $legajo, $sueldo);
		
	echo $muestroEmpleado->toString();
}