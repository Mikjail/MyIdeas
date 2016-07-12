<?php 
session_start();

if (isset($_SESSION["usuario"])) {

	
 ?>  	


			<div class= "container logInForm col-md-4 col-md-offset-4">
 				<h1>
 				Bienvenido
 				<?php 
 				echo $_SESSION['usuario']["nombre"];
 				?>
 				!</h1>
 				<p>usted ya ha ingresado al sistema</p>

		
 				<form data-toggle="validator" method="post" role="form">
 		
 				<div class="form-group">
			    <label for="inputName" class="control-label">Nombre</label>
			   	<input id="nombre" class="inputFormul form-control" type="text" value=<?php echo $_SESSION['usuario']["nombre"];?> pattern="^[A-z]{1,}$" maxlength="15" data-error="We only accept a-Z names!" placeholder="Nombre*" readonly>
				<div class="helpValidacion help-block with-errors" style="display: none;">A-z</div>
				</div>
 				
 				<div class="form-group">
 				<label>Email</label>
 				<input id="mail" class="inputFormul form-control"  type="text" value=<?php echo $_SESSION['usuario']["email"];?>  placeholder="Email" data-error="Email invalido!" readonly>
 				<div class="helpValidacion help-block with-errors" style="display: none;">ejemplo@ejemplo.com</div>
 				</div>

				<div class="form-group">
 				<label>Foto</label>
 				<br>
 				<img src=<?php echo $_SESSION['usuario']["foto"];?> width='100px' height='100px' style='border: 1px solid black'/>
 				<input type="file" class="helpValidacion" id="archivo" onchange="SubirFotoUsuario()" style="display: none;">
 				</div>
 				<br>

 				<br>
 				
				<div class="helpValidacion form-group" style="display: none;">
			    <label for="inputPassword" class="inputFormul control-label">Ingrese Contraseña para confirmar edición</label>
			    <div class="form-group">
			      <input id="password" type="password" class="inputFormul form-control" name="password" data-minlength="6" pattern="^[_A-z0-9]{1,}$" class="form-control" id="inputPassword" placeholder="Contrasena*" required>
		   		</div>
		   		</div>	

				<input type="hidden" id="idEntidad" value=<?php echo $_SESSION["usuario"]["id"];?> >
				<input type="hidden" id="fotoDescr" value=<?php echo $_SESSION["usuario"]["foto"];?> >
 				<input type="hidden" id="tipo" value=<?php echo $_SESSION["usuario"]["usuario"]; ?> >
				

 				<button id="btnModificar" class="btn btn-default" onclick="ModificarUsuario(); return false;">Modifcar</button>
 				<button id="btnGuardar" class="btn btn-default" onclick="ValidarModificacion(); return false;" style="display: none;">Guardar</button>
 				</form>
 				<h3>Si desea salir presione en el boton logout!</h3>
 				
  			</div> 	
<?php 
}
?>