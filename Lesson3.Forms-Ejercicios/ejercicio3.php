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
	
	<div class="container ejercicio col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-4">
		<h1>Ejercicio 3</h1>
			<form method="POST" style="text-align: center;">

				<div class="form-group">
					<label for="Largo">Grados</label>
					<br>
					<input type="text" placeholder="grados*" name="grados">
				</div>

				<div class="form-group col-md-6 col-md-offset-3">
					<button class="btn btn-default" name="farenheit" value="farenheit">Farenheit</button>
				</div>

				<div class="form-group col-md-6 col-md-offset-3">
					<button class="btn btn-default" name="centigrados" value="centigrados">Centigrados</button>
				</div>
			</form>

	<div class="animated bounceInLeft clear">
					<h3>
					<?php include_once("calcEjercicio3.php")
				?>
					</h3>
	</div>
	</div>	
	
	
</body>
</html>