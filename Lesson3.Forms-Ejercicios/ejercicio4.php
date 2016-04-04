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
		<h2>Ejercicio 4</h2>
		<h3>Para el departamento de iluminación</h3> 
		<ul>
			<li>
				<strong>
					Si compra 6 o más lamparitas bajo consumo tiene un descuento del 50%.
				</strong>
			</li>
			<li>
				<strong>
					Si compra 5 lamparitas bajo consumo marca "ArgentinaLuz" se hace un descuento del 40 % y si es de otra marca el descuento es del 30%.
				</strong>
			</li>
			<li>
				<strong>
					Si compra 4 lamparitas bajo consumo marca "ArgentinaLuz" o “FelipeLamparas” se hace un descuento del 25 % y si es de otra marca el descuento es del 20%.
				</strong>
			</li>
			<li>
				<strong>
					Si compra 3 lamparitas bajo consumo marca "ArgentinaLuz" el descuento es del 15%, si es “FelipeLamparas” se hace un descuento del 10 % y si es de otra marca un 5%.
				</strong>
			</li>
			<li>
				<strong>
					Si el importe final con descuento suma más de $120 se debe sumar un 10% de ingresos brutos en informar del impuesto con el siguiente mensaje: ”Usted pago X de IIBB.”, siendo X el impuesto que se pagó.
				</strong>
			</li>
		</ul>
	</div>

	<div class="container ejercicio col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-4">
		
		<form method="POST" style="text-align: right;">

			<div class="form-group" style="text-align: center;">
				<label for="Largo"><h3>Cantidad de Lamparas</h3></label>
					<select name="listLampara">
						 <?php 
						 		for ($i=0; $i < 100; $i++) { 
						 			echo "<option value=".$i.">".$i."</option>";
						 		}
						  ?> 
					</select>
			</div>

			<div class="form-group" style="text-align: center;">
				<button class="btn btn-default" name="calcPrecio" value="calcPrecio">Calcular precio</button>
			</div>
			
			<hr>

			<div class="form-group" style="margin-right: 15%;">
				<label for="Precio"><h3>Precio Unitario</h3></label>
				<input type="text" placeholder="Precio unitario" name="precio">
			</div>
			
			<div class="form-group" style="margin-right: 15%;">
				<label for="Descuento"><h3>Descuento</h3></label>
				<input type="text" placeholder="Descuento"name="radio">
			</div>
			
			<div class="form-group" style="margin-right: 15%;">
				<label for="Radio"><h3>Total</h3></label>
				<input type="text" placeholder="Total"name="radio">
			</div>


			
		</form>

		<div class="animated bounceInLeft ">
			<?php include_once("calcEjercicio4.php") ?>
		</div>

	</div>
	
</body>
</html>