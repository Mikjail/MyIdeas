!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up Form</title>
	<meta charset="utf-8">
	<meta name="description" content="Sign In">
	<meta name="keywords" content="Home">
	<meta name="author" content="Mikjail Salazar">

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
	
	
		<form data-toggle="validator" role="form" method="POST">
		<div class="col-md-6">
		<div class="form-group">
		    <label for="inputName" class="control-label">Name</label>
		    <input type="text" class="form-control" id="inputName" pattern="^[A-z]{1,}$" maxlength="15" placeholder="First Name*" data-error="We only accept a-Z names!" name="name" required>
			<div class="help-block with-errors">A-z</div>
		</div>
		
		<div class="form-group">
		    <label for="inputName" class="control-label">Last Name</label>
		    <input type="text" class="form-control" id="inputName" pattern="^[A-z]{1,}$" maxlength="15" placeholder="Last Name*" data-error="We only accept a-Z names!" name="lastName" required>
		    <div class="help-block with-errors">A-z</div>
		</div>

		<div class="form-group">
		    <label for="birthDate" class="control-label">Date of Birth</label>
		    <input type="text" class="form-control" pattern="(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d" id="dates_pattern2" list="dates_pattern2_datalist" placeholder="DD/MM/YYY" name="dateBirth" required>
		    <div class="help-block with-errors">DD/MM/YYYY</div>
		    </span>
		</div>
		
			<div class="form-group">
			<label for="gender">Gender</label>
		    <div class="radio">
		      <label>
		        <input type="radio" name="gender" value="male" required>
		        Male
		      </label>
		    </div>
		    <div class="radio">
		      <label>
		        <input type="radio" name="gender" value="female" required>
		        Female
		      </label>
		    </div>
		  </div>
	
		</div>

		<div class="col-md-6">	
			
			<div class="form-group">
				<label for="city" >City</label>	
				<select class="form-control" name="city">
				  <option>Bs Aires</option>
				  <option>Avellaneda</option>
				  <option>Lanus</option>
				</select>
				<div class="help-block with-errors">Choose your city</div>
			</div>


			  <div class="form-group">
			    <label for="inputEmail" class="control-label">Email</label>
			    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Invalid mail adress!" name="email" required>
			    <div class="help-block with-errors">example@mail.com</div>
			  </div>
			  

			<div class="form-group">
			    <label for="inputPassword" class="control-label">Password</label>
			    <div class="form-group">
			      <input type="password" data-minlength="6" pattern="^[_A-z0-9]{1,}$" class="form-control" id="inputPassword" placeholder="Password*" name="password" required>
			      <div class="help-block">Minimum of 6 characters (Special Characteres not allowed).</div>
		   		</div>
		   	</div>	
		    
		    <div class="form-group">
			      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm*"  name="password"  required>
			      <div class="help-block with-errors">Has to be the same password</div>
			</div>
			
			<div class="form-group">
			 	<div class="radio">
		      <label>
		        <input type="radio" name="agree" value="I agree" required>
		        I agree
		      </label>
		    </div>
			</div>

		</div>


		<button type="submit" class="col-md-offset-11 btn btn-success" name="signup" value="signup">SignUp</button>
		</form>
		<br>

		<?php 
			var_dump($_POST);
		 ?>

	</div>

		
</body>
</html>