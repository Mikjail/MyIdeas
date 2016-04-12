<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	include_once("Fabrica.php");
		$nuevo = new Empleado("Mika",94755527,"Salazar","m",100,12200);

		$nuevo2 = new Empleado("Mika2",94755528,"Salazar","m",100,12200);

		$nuevo3 = new Empleado("Mika3",94755529,"Salazar","m",100,12200);

		
		
		var_dump($nuevo);

		echo "<br>".$nuevo->toString();

		echo "<br>";

		// echo "<br>".$nuevo->getNombre()."<br>".
		// 	 "<br>".$nuevo->getApellido()."<br>".
		// 	 "<br>".$nuevo->getDni()."<br>".
		// 	 "<br>".$nuevo->getSexo()."<br>".
		// 	 "<br>".$nuevo->getLegajo()."<br>".
		// 	 "<br>".$nuevo->getSueldo()."<br>";
		$razonSocial = "MIKA";
		$nuevaFabrica = new Fabrica($razonSocial);	

		var_dump($nuevaFabrica);
		echo "<br>";
		$nuevaFabrica->AgregarEmpleado($nuevo);
		$nuevaFabrica->toString(); 




 	?>

</body>
</html>