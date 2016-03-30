<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio1</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-2.2.2.min"></script>
	
</head>
<body>
	<?php 
	include_once("menu.php")
	 ?>
	 
	<div class="container task">
		<h2>Ejercicio 1</h2>
		<h3>Para el departamento de facturación</h3> 
		<ul>
			<li><strong>Ingresar tres precios de productos y mostrar la suma de los mismos.</strong></li>
			<li><strong>Ingresar tres precios de productos y mostrar el promedio de los mismos.</strong></li>
			<li><strong>ingresar tres precios de productos y mostrar precio final (más IVA 21%).</strong></li>
		</ul>
	</div>
	<div class="container ejercicio col-md-4 col-md-offset-4">
	
		<form class="col-md-10 col-md-offset-1" method="POST" style="text-align: center">
			
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
				
			<div class="form-group col-md-6 col-md-offset-3">
				<button class="btn btn-default" name="Suma" value"Suma" >Sumar</button>
			</div>	
			
			<div class="form-group col-md-6 col-md-offset-3">
				<button class="btn btn-default" name="Promedio" value"Promedio">Promedio</button>
			</div>
			
			<div class="form-group col-md-6 col-md-offset-3">
				<button class="btn btn-default" name="PrecioFinal" value"PrecioFinal">PrecioFinal</button>
			</div>
		
		</form>
	<h2>Resultado:</h2>
	<div class="animated bounceInLeft">
		<h2><?php include_once("calcEjercicio1.php");?></h2>
	</div>
	</div>
	
	
</body>
</html>