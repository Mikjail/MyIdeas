<?php 
session_start();

if (isset($_SESSION["usuario"])) {
	
	if ($_SESSION["usuario"]["usuario"] =="administrador" ||  $_SESSION["usuario"]["usuario"] =="vendedor"){
 ?>  	
	<div class= "container logInForm col-md-4 col-md-offset-4">
 				<h1>
 				Bienvenido
 				<?php 
 				echo $_SESSION['usuario']["nombre"];
 				?>
 				!</h1>
 				<p>usted ya ha ingresado al sistema</p>
 				<h2>Nombre</h2>
 				<input type="text" value=<?php echo $_SESSION['usuario']["nombre"];?> >
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
}
 ?>