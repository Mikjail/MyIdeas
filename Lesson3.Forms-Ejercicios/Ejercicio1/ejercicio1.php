<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio1</title>

	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myquery.js"></script>
	
	
</head>
<body>
	<div class="container ejercicio col-md-4 col-md-offset-4">
	<h1>Ejercicio 1</h1>
		<form method="POST" style="text-align: center">
			
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
				
			<div class="form-group">
				<button class="btn btn-default" name="Suma" value"Suma" >Sumar</button>
			</div>	
			
			<div class="form-group">
				<button class="btn btn-default" name="Promedio" value"Promedio">Promedio</button>
			</div>
			
			<div class="form-group">
				<button class="btn btn-default" name="PrecioFinal" value"PrecioFinal">Promedio</button>
			</div>
		
		</form>
	<h2>Resultado:</h2>
	<div class="animated bounceInLeft">
		<h2><?php include_once("resultados.php");?></h2>
	</div>
	</div>
	
	
</body>
</html>