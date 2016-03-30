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
	<?php 
	include_once("menu.php")
	 ?>
	<div class="container task">
		<h2>Ejercicio 3</h2>
		<h3>Para el departamento de Construcción</h3> 
		<ul>
			<li>
				<strong>
					Al ingresar una temperatura en Fahrenheit debemos mostrar la temperatura en
					Centígrados con un mensaje concatenado (ej.: " 32 Fahrenheit son 0 centígrados").
				</strong>
			</li>
			<li>
				<strong>
					Al ingresar una temperatura en Centígrados debemos mostrar la temperatura en
					Fahrenheit (ej.: "0 centígrados son 32 Fahrenheit ").
				</strong>
			</li>
		</ul>
	</div>

	<div class="container ejercicio col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-4">
		<form method="POST" style="text-align: center;">

			<div class="form-group">
				<label for="Largo">`<h3>Grados</h3></label>
				<br>
				<input type="text" placeholder="grados*" name="grados">
			</div>

			<div class="form-group col-md-6 col-md-offset-3">
				<button class="btn btn-default" name="fahrenheit" value="fahrenheit">Fahrenheit</button>
			</div>

			<div class="form-group col-md-6 col-md-offset-3">
				<button class="btn btn-default" name="centigrados" value="centigrados">Centigrados</button>
			</div>

		</form>
		<h2>Resultado:</h2>
		<div class="animated bounceInLeft clear">
			<h3>
				<?php include_once("calcEjercicio3.php"); ?>
			</h3>
		</div>
	</div>	
	
	
</body>
</html>