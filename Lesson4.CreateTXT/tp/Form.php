<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		
	<script src="js/jquery.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myquery.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/validator.min.js"></script>
	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>

	<div class= "container signUpForm" >
		<h1 style= "text-align: center;">UTN - Sign Up</h1>
			
		<hr>
		<div class="col-md-6">
	
		<form data-toggle="validator" role="form" action="Administracion.php" method="POST">
		<div class="form-group">
		    <label for="inputName" class="control-label">Name</label>
		    <input type="text" name="Nombre" class="form-control" id="inputName" pattern="^[A-z]{1,}$" maxlength="15" placeholder="First Name*" data-error="We only accept a-Z names!" required>
			<div class="help-block with-errors">A-z</div>
		</div>
		
		<div class="form-group">
		    <label for="inputName" class="control-label">Last Name</label>
		    <input type="text" name="Apellido" class="form-control" id="inputName" pattern="^[A-z]{1,}$" maxlength="15" placeholder="Last Name*" data-error="We only accept a-Z names!" required>
		    <div class="help-block with-errors">A-z</div>
		</div>

		<div class="form-group">
		    <label for="inputName" class="control-label">Dni</label>
		    <input type="text" name="Dni" class="form-control" id="inputName" pattern="^[0-9]{1,}$" maxlength="15" placeholder="Dni*" data-error="We only accept numbers!" required>
		    <div class="help-block with-errors">0-9</div>
		</div>

		<div class="form-group">
		    <label for="inputName" class="control-label">legajo</label>
		    <input type="text" name="Legajo" class="form-control" id="inputName" pattern="^[0-9]{1,}$" maxlength="15" placeholder="legajo*" data-error="We only accept numbers!" required>
		    <div class="help-block with-errors">0-9</div>
		</div>
		
		<div class="form-group">
		    <label for="inputName" class="control-label">Sueldo</label>
		    <input type="text" name="Sueldo" class="form-control" id="inputName" pattern="^[0-9]{1,}$" maxlength="15" placeholder="Sueldo*" data-error="We only accept numbers!" required>
		    <div class="help-block with-errors">0-9</div>
		</div>
		
		
			<div class="form-group">
			<label for="gender">Gender</label>
		    <div class="radio">
		      <label>
		        <input type="radio" name="Sexo" value="masculino" required>
		        Male
		      </label>
		    </div>
		    <div class="radio">
		      <label>
		        <input type="radio" name="Sexo" value="femenino" required>
		        Female
		      </label>
		    </div>
		  </div>

			<button type="submit" class="col-md-offset-11 btn btn-success">SignUp</button>
		</div>
	</div>


	
</body>
</html>