<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	include_once("Empleado.php");

		$nuevo = new Empleado("Mika",94755527,"Salazar","m",100,12200);

		var_dump($nuevo);

		echo "<br>".$nuevo->toString();

		echo "<br>".$nuevo->getNombre()."<br>".
			 "<br>".$nuevo->getApellido()."<br>".
			 "<br>".$nuevo->getDni()."<br>".
			 "<br>".$nuevo->getSexo()."<br>".
			 "<br>".$nuevo->getLegajo()."<br>".
			 "<br>".$nuevo->getSueldo()."<br>";
 	?>

</body>
</html>