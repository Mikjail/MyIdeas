<?php
  session_start();

if (!isset($_SESSION['usuario'])){
      # code...
    
   
  ?>
	<div class= "container signUpForm" >
		<h1 style= "text-align: center;">UTN - Sign Up</h1>
			
		<hr>
		<form data-toggle="validator" role="form">
		
		<div class="col-md-5">
	
		
		<div class="form-group">
		    <label for="inputName" class="control-label">Name</label>
		    <input type="text" class="form-control" id="inputName" pattern="^[A-z]{1,}$" maxlength="15" placeholder="First Name*" data-error="We only accept a-Z names!" required>
			<div class="help-block with-errors">A-z</div>
		</div>
		
		 <div class="form-group">
			    <label for="inputEmail" class="control-label">Email</label>
			    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Invalid mail adress!" required>
			    <div class="help-block with-errors">example@mail.com</div>
		 </div>
			  
			
			<button type="submit" class="col-md-offset-12 btn btn-success">SignUp</button>	
			
		</div>

		
		<div class="col-md-offset-2 col-md-5">	
		



			<div class="form-group">
			    <label for="inputPassword" class="control-label">Password</label>
			    <div class="form-group">
			      <input type="password" data-minlength="6" pattern="^[_A-z0-9]{1,}$" class="form-control" id="inputPassword" placeholder="Password*" required>
			      <div class="help-block">Minimum of 6 characters (Special Characteres not allowed).</div>
		   		</div>
		   	</div>	
		    
		    <div class="form-group">
			      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm*" required>
			      <div class="help-block with-errors">Has to be the same password</div>
			</div>
			
			<div class="form-group">
			 	<input class="col-md-1" type="checkbox" class="form-control" id="checkRegister" name="agree" value="Agree">I agree
			</div>
		</div>
		</form>

	</div>
		<?php 
  }else{

  ?>
 			<button class="btn btn-lg btn-danger btn-block" onclick="deslogear()"type="submit">Logout</button>
  

  <?php
   }
 ?>  		
