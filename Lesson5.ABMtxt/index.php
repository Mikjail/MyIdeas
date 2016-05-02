<!DOCTYPE html>
<html lang="en">
<head>
	<script src="js/jquery.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">

	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<h1>Items</h1>
		<div class="col-md-6">
			<div class="form-group">
				<label for="CodBarras">Cod. Barras</label>
				<input type="text" name="codBarras" id="codBarras">
			</div>
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre">
			</div>

			<div class="form-group">
				<label for="Archivo"></label>
				<input type="file" name="archivo" id="archivo">
			</div>
			<div class="form-group">
				<input type="submit" name="enviar" class="enviar" value="Guardar" onclick="AgregarProducto()">
				<input type="hidden" id="hdnQueHago" value="agregar" />
			</div>
		</div>
		<div class="col-md-6" id="divGrilla">
			
		</div>
	</div>
</body>
</html>