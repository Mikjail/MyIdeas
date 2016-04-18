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
	
		<form data-toggle="validator" role="form" action="Administrcion.php" method="POST">
		<div class="form-group">
		    <label for="inputName" class="control-label">Name</label>
		    <input type="text" class="form-control" id="inputName" pattern="^[A-z]{1,}$" maxlength="15" placeholder="First Name*" data-error="We only accept a-Z names!" required>
			<div class="help-block with-errors">A-z</div>
		</div>
		
		<div class="form-group">
		    <label for="inputName" class="control-label">Last Name</label>
		    <input type="text" class="form-control" id="inputName" pattern="^[A-z]{1,}$" maxlength="15" placeholder="Last Name*" data-error="We only accept a-Z names!" required>
		    <div class="help-block with-errors">A-z</div>
		</div>

		<div class="form-group">
		    <label for="birthDate" class="control-label">Date of Birth</label>
		    <input type="text" class="form-control" pattern="(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d" value="" name="dates_pattern2" id="dates_pattern2" list="dates_pattern2_datalist" placeholder="DD/MM/YYY" required>
		    <div class="help-block with-errors">DD/MM/YYYY</div>
		    </span>
		</div>
		
			<div class="form-group">
			<label for="gender">Gender</label>
		    <div class="radio">
		      <label>
		        <input type="radio" name="underwear" required>
		        Male
		      </label>
		    </div>
		    <div class="radio">
		      <label>
		        <input type="radio" name="underwear" required>
		        Female
		      </label>
		    </div>
		  </div>

			<button type="submit" class="col-md-offset-11 btn btn-success">SignUp</button>
		</div>
	</div>


	
</body>
</html>