<?php
  session_start();

if (!isset($_SESSION['usuario'])){

   
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
  }
  if ($_SESSION['usuario']["usuario"]=="vendedor" || $_SESSION["usuario"]["usuario"]== "comprador"){

  ?>
  			<div class= "container logInForm col-md-4 col-md-offset-4">
 				<h1>
 				Bienvenido
 				<?php 
 				echo $_SESSION['usuario']["nombre"];
 				?>
 				!</h1>
 				<p>usted ya ha ingresado al sistema</p>
 				<h2>Nombre</h2><?php echo $_SESSION['usuario']["nombre"];?>
 				<h2>Email</h2><?php echo $_SESSION['usuario']["email"];?>
 				<h2>Foto</h2>
 				<img src=<?php echo $_SESSION['usuario']["foto"];?> width='100px' height='100px' style='border: 1px solid black'/>
 				<label>Modificar Foto</label>
 				<input type="file" id="archivo" onchange="SubirFotoUsuario()">
 				<h3>Si desea salir presione en el boton logout!</h3>
				<input type="hidden" id="fotoDescr" value"0">
 				<a href="logIn.html">

  				</a>
  			</div>

  <?php
   }
   ?>
