<?php  
include_once("Administracion.php");

/*$archivo = fopen("archivosTP3/empleados.txt", "r");
$listaEmpleados = array();

while(!feof($archivo)){
	$linea = fgets($archivo);
	$fabrica = explode(" ",$linea);
	
		if ($fabrica[0] != "") {
			
		 $nombreFabrica=$fabrica[0];	
		 $nombre= $fabrica[1];
		 $apellido = $fabrica[2];
		 $dni = (int)$fabrica[3];
		 $sexo = $fabrica[4];
		 $legajo = (int)$fabrica[5];
		 $sueldo = (double)$fabrica[6];
		 $path = $fabrica[7];

		 $listaEmpleados[] = new Empleado($nombre, $dni, $apellido, $sexo, $legajo, $sueldo, $path);

		 
		}
}
		$fabrica = new Fabrica($nombreFabrica);
		$fabrica->AgregarEmpleados
		fclose($archivo);
*/
		//var_dump($listaEmpleados);

		$fabrica = new Fabrica("MikaFabrica");

		echo "<table border= '1px solid black'; >
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Dni</th>
		<th>Sexo</th>
		<th>Legajo</th>
		<th>Sueldo</th>
		<th>Foto</th>";

		foreach(Fabrica::ToArrayEmpleados($fabrica) as $empl){
			$mostrarEmp = explode(" ",$empl->ToString());
			echo "<tr>
			<td>".$mostrarEmp[0]."</td>
			<td>".$mostrarEmp[1]."</td>
			<td>".$mostrarEmp[2]."</td>
			<td>".$mostrarEmp[3]."</td>
			<td>".$mostrarEmp[4]."</td>
			<td>".$mostrarEmp[5]."</td>
			<td><img src=".$mostrarEmp[6]."></td>
			</tr>";		
		}
	echo "</table><a href='Form.html'>Volver</a>";