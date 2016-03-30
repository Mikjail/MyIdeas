<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-2.2.2.min"></script>
</head>
<body>
	
	<div class="container task">
		<h2>Ejercicio 2</h2>
		<h3>Para el departamento de Construcción</h3> 
		<ul>
			<li>
				<strong>
					Mostrar la cantidad de alambre a comprar si se ingresara el largo y el ancho de un
				terreno rectangular y se debe alambra con tres hilos de alambre.
				</strong>
			</li>
			<li>
				<strong>
					Mostrar la cantidad de alambre a comprar si se ingresara el radio de un terreno
					circular y se debe alambra con tres hilos de alambre.
				</strong>
			</li>
			<li>
				<strong>
					Para hacer un contrapiso de 1m x 1m se necesitan 2 bolsas de cemento y 3 de cal,
					debemos mostrar cuantas bolsas se necesitan de cada uno para las medidas que nos
					ingresen.
				</strong>
			</li>
		</ul>
	</div>

	<div class="container ejercicio col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-4">
		
		<form method="POST" style="text-align: center;">

			<div class="form-group">
				<label for="Largo"><h3>Largo</h3></label>
				<br>
				<input type="text" placeholder="Largo del terreno" name="largo">
			</div>

			<div class="form-group">
				<label for="Ancho"><h3>Ancho</h3></label>
				<br>
				<input type="text" placeholder="Ancho del terreno" name="ancho">
			</div>
			
			<div class="form-group">
				<label for="Radio"><h3>Radio</h3></label>
				<br>
				<input type="text" placeholder="Radio"name="radio">
			</div>
			<div class="form-group">
				<button class="btn btn-default" name="rectangulo" value="rectangulo">Calcular Rectangulo de Alambre</button>
			</div>
			<div class="form-group">
				<button class="btn btn-default" name="alambre" value="alambre">Calcular Circulo de Alambre</button>
			</div>
			<div class="form-group">
				<button class="btn btn-default" name="materiales" value="materiales">Calcular Materiales Contrapiso</button>
			</div>
		</form>

		<div class="animated bounceInLeft ">
			<?php include_once("calcEjercicio2.php") ?>
		</div>

	</div>
	
</body>
</html>