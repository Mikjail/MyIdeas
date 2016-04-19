<?php  include("administracion.php");

$archivo = fopen("archivosTP3/empleados.txt", "r");
$listaEmpleados = array();




	echo "<table border='1 px solid black'><tr><th>Nombre</th><th>Apellido</th><th>Dni</th><th>Sexo</th><th>Legajo</th><th>Sueldo</th></tr>";

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

	 echo "<tr><td>$nombre</td><td>$apellido</td><td>$dni</td><td>$sexo</td><td>$legajo</td><td>$sueldo</td>";
	 	 $listaEmpleados[] = new Empleado($nombre, $dni, $apellido, $sexo, $legajo, $sueldo);
	}

}
	fclose($archivo);

