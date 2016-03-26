<html>
<head>
	<title>Lesson2</title>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myquery.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/validator.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body> 

	<div class= "container" style="background-color: white;">
<?php 


	require_once"alumno.php";
	include_once"mascota.php";
	//Include si no funciona me devuelve un Warning.
	//once or not. Es para incluir una sola vez o no!
	$saludo= "<h1>Bienvenido</h1>";
	$nombre="Mikjail";
	$numero=25;

	echo $saludo;

	echo "<h3>Mikjail</h3>";

	if($numero>18){
		echo "Usted es mayor de edad";
	} 
	else{
		echo "Es menor de 18";
	}

	$miArray  = array(2,4,"Mikjail");

	foreach ($miArray as $elemento) {
		echo "<br>".$elemento;
	}

	//Sirve para comprobar si el array esta bien
	var_dump($miArray);

	$miNuevoArray = array("Pizza"=>20, "Cocacola" => 10, "Hola" => 23);

	echo "<br>";
	var_dump($miNuevoArray);

	echo "<br>";

	$valor= array("nombre" => "Mikjail Salazar","Apellido" => "Salazar", "Edad" => 25, "Edo. Civil" => "Soltero");

	var_dump($valor);

	$otro = array();

	echo "<br>";

	$otro[5]="Hello World";

	$otro[] = "Bye";

	$otro[] = "Bye de nuevo";

	$otro["Producto"] = "Mi nuevo Array";

	var_dump($otro);

	echo "<br>". $otro["Producto"];


	$miObjeto = new stdclass();
	$miObjeto->nombre="Mikjail";
	$miObjeto->Apellido="Salazar";
	$miObjeto->fechaProductos= $miNuevoArray;

	var_dump($miObjeto);


	$yo = new Alumno();
	$yo ->nombre ="Mikjail";
	$yo ->apellido="Salazar";
	echo "<br>". "Su Nombre es: ".$yo->nombre ." y su apellido es: ". $yo->apellido;	
	$yo -> Mostrar();

	$yo->soltero = true;

	Alumno::MostrarAhora($yo);

	echo "<br>".$yo->nombre;

	foreach ($yo as $atributo => $value) {
		var_dump($atributo);
		# code...
	}
//No podemos usar un objeto como array.
//	echo $yo[nombre];

//No podemos usar un array como objeto.
	//echo $miNuevoArray->Pizza;
?>
</div>



	

</body>
</html>