<!DOCTYPE html>
<html lang="en">
<head>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myquery.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<meta charset="UTF-8">
	<title>Ejercicio1</title>
</head>
<body>
	<div class="jumbotron ejercicio col-md-6 col-md-offset-3">
	<h1 class="animated flash">Ejercicio 1</h1>
		<form method="POST">
			<div class="form-group">
			<label for="exampleInputName2">Producto Uno:</label>
	    <input type="text" name="numeroUno" class="form-control" placeholder="Producto Uno*">
			</div>

			<div class="form-group">
			<label for="exampleInputName2">Producto Dos</label>
	    <input type="text" name="numeroDos" class="form-control" placeholder="Producto Dos*">
			</div>
		
		<div class="form-group">
			<label for="exampleInputName2">Producto Tres</label>
	    <input type="text" name="numeroTres" class="form-control" placeholder="Producto Tres*">
			</div>
			

			<button type="submit" name="Suma" value"Suma" class="btn btn-default animated bounceInRight">Sumar</button>
			<button type="submit" name="Promedio" value"Promedio" class="btn btn-default animated bounceInRight">Promedio</button>
			<button type="submit" name="PrecioFinal" value"PrecioFinal" class="btn btn-default animated bounceInRight">Promedio</button>
		</form>
	<h2>Resultado:</h2>
	<div class="col-md-offset-5 animated slideInUp">
		<h2><?php include_once("resultados.php");?></h2>
	</div>
	</div>
	
	
</body>
</html>