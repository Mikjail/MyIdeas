<?php 	
session_start();
	if(!isset($_SESSION['usuario'])){
		# code...
 ?>
	<div class= "container signUpForm" >
		<h1 style= "text-align: center;">UTN - Sign Up</h1>
			
		<hr>
		<form data-toggle="validator" method="post" onsubmit="GuardarUsuario(); return false;" role="form" enctype="multipart/form-data">
		
		<div class="col-md-5">
	
		
		<div class="form-group">
		    <label for="inputName" class="control-label">Nombre</label>
		    <input id="nombre" type="text" class="form-control" id="inputName" pattern="^[A-z]{1,}$" maxlength="15" placeholder="First Name*" data-error="We only accept a-Z names!" required>
			<div class="help-block with-errors">A-z</div>
		</div>
		
		 <div class="form-group">
				<label for="tipo">tipo</label>
			    <div class="form-group">
			        <input id="tipo" class="tipo1" type="radio" name="tipo" value="comprador" required>
			        <strong>comprador</strong>
			    	<br>
			        <input id="tipo" class="tipo2" type="radio" name="tipo" value="vendedor" required>
			    	<strong>vendedor</strong>
			    	<br>
			        <input id="tipo" class="tipo3" type="radio" name="tipo" value="administrador" required>
			        <strong>administrador</strong>
			    </div>
			</div>

		
		 <div class="form-group">
			    <label for="inputEmail" class="control-label">Mail</label>
			    <input id="mail" type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Invalid mail adress!" required>
			    <div class="help-block with-errors">ejemplo@ejemplo.com</div>
		 </div>
			  
			<button onclick="CambiarSignAndLog('MostrarLogIn')" class="btn btn-success">Back</button>	
			
			<button type="submit" class="col-md-offset-12 btn btn-success">SignUp</button>	
			
			
		</div>

		
		<div class="col-md-offset-2 col-md-5">

			<div class="form-group">
			    <label  for="inputPassword" class="control-label">Password</label>
			    <div class="form-group">
			      <input id="clave" type="password" data-minlength="3" pattern="^[_A-z0-9]{1,}$" class="form-control" id="inputPassword" placeholder="Password*" required>
			      <div class="help-block">No puede ser menor a 3(Caracteres Especiales Prohibidos).</div>
		   		</div>
		   	</div>	
		    
		    <div class="form-group">
			      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm*" required>
			      <div class="help-block with-errors">Debe ser la misma clave</div>
			</div>
			<input type="file" id="archivo" onchange="SubirFotoUsuario()">		
			
			<input type="hidden" id="idEntidad" value"0">
			<input type="hidden" id="fotoDescr" value"0">
			<div class="col-md-offset-4" id="divFoto" style="display: none;"></div>
		
		</div>
		</form>
				
	</div>
<?php 
}
else{
 ?>

 	<div class= "container logInForm col-md-4 col-md-offset-4">
				<h1>Usted ya esta registrado como 				<?php 
 				echo $_SESSION['usuario']["nombre"];
 				?>
 				!</h1>
 				<p>usted ya ha ingresado al sistema</p>
 				<h2>Nombre</h2><?php echo $_SESSION['usuario']["nombre"];?>
 				<h2>Email</h2><?php echo $_SESSION['usuario']["email"];?>
 				<h2>Tipo</h2><?php echo $_SESSION['usuario']["usuario"];?>
 				<h2>FOTO</h2>
 				<img src=<?php echo $_SESSION['usuario']["foto"];?> width='100px' height='100px' style='border: 1px solid black'>
 				<h3>Si desea salir presione en el boton logout!</h3>


 				<a href="logIn.html">
 				<button class="col-md-2 btn btn-lg btn-danger btn-block" onclick="deslogear()"type="submit">Logout</button>
  				</a>
  			</div>

 <?php 
 } 

 ?>