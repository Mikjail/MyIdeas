<?php 
	include_once("Empleado.php");

	if(isset($_POST["Nombre"]) && isset($_POST["Apellido"]) && isset($_POST["Sexo"]) && isset($_POST["Dni"]) ){
	 echo "<a href='Form.php'>Los datos fueron enviados!</a>" ;


	 $nombre= $_POST["Nombre"];
	 $apellido = $_POST["Apellido"];
	 $sexo = $_POST["Sexo"];
	 $dni = (int)$_POST["Dni"];
	 $legajo = (int)$_POST["Legajo"];
	 $sueldo = (double)$_POST["Sueldo"];


	$empleado = new Empleado($nombre, $dni, $apellido, $sexo, $legajo, $sueldo);
	}

	echo "<br>";

	echo "<table><tr><th>Nombre</th><th>Apellido</th><th>Dni</th><th>Sexo</th><th>Legajo</th><th>Sueldo</th>";

	echo $empleado->toString();

 ?>