<?php
  session_start();

if (!isset($_SESSION['usuario'])){
      # code...
    
   
  ?>


	<div class= "container logInForm col-md-4 col-md-offset-4">
		<h1 style= "text-align: center;">UTN - Login</h1>
		<hr>
		<form data-toggle="validator" onsubmit="validarLogin(); return false;">
			
			<div class="form-group">
			    <label for="inputName" class="control-label">User Name</label>
			    <input name="user" type="text" class="form-control" id="user" pattern="^[A-z]{1,}$" maxlength="15" placeholder="User Name*" data-error="We only accept a-Z names!"required>
				<div class="help-block with-errors">A-z</div>
			</div>
		
			<div class="form-group">
			    <label for="inputPassword" class="control-label">Password</label>
			    <div class="form-group">
			      <input id="password" type="password" name="password" data-minlength="6" pattern="^[_A-z0-9]{1,}$" class="form-control" id="inputPassword" placeholder="Password*" required>
			      <div class="help-block">Minimum of 6 characters (Special Characteres not allowed).</div>
		   		</div>
		   	</div>	
		    
			
			<div class="form-group">
			 	<input class="col-md-1" type="checkbox" class="form-control" id="rememberMe" name="agree" checked>Remember my password
			</div>
			
			<button type="submit" class="col-md-offset-4 btn btn-success">Log In</button>
			<br> 
			<br>
			<a href="#" class="col-md-12" style="text-align: center;">Forgot my password</a>
			
		</form>		
	</div>
		<?php 
  }else{

  ?>
 			<button class="btn btn-lg btn-danger btn-block" onclick="deslogear()"type="submit">Logout</button>
  

  <?php
   }
 ?>  		
