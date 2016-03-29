<?php 


	if (isset($_POST["Suma"]) || isset($_POST["Promedio"]) || isset($_POST["PrecioFinal"])) {
		
		$numeroUno= $_POST["numeroUno"];
		$numeroDos= $_POST["numeroDos"];
		$numeroTres= $_POST["numeroTres"];
		
		$sumar= $numeroUno + $numeroDos + $numeroTres;

		$promedio= $sumar/3;

		$precioFinal = $sumar * 1.21;

		if (isset($_POST["Suma"])) {
			echo $sumar;
		}
		if (isset($_POST["Promedio"])) {
			echo $promedio;
		}
		if (isset($_POST["PrecioFinal"])) {
			echo $precioFinal;
		}
	}

 ?>