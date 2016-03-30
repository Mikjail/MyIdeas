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
				<label for="Largo">Largo</label>
				<br>
				<input type="text" placeholder="Largo del terreno" name="largo">
			</div>

			<div class="form-group">
				<button class="btn btn-default" name="rectangulo" value="farenheit">Farenheit</button>
			</div>
			<div class="form-group">
				<button class="btn btn-default" name="alambre" value="alambre">Centigrados</button>
			</div>
			
		</form>
			<div class="animated bounceInLeft"><?php include_once("calcEjercicio2.php")
			?>
			</div>

	</div>
	
</body>
</html>