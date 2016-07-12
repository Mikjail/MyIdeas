<?php 	//Primera linea que debe estar para validar sesiones.
	session_start();
if(isset($_SESSION['usuario'])){
		# code...
		require_once("clases/AccesoDatosUsuario.php");
		require_once("clases/Usuario.php");
		$arrayEntidades=Usuario::TraerTodosLosUsuarios();
 ?>
		<div class= "col-md-4 abmForm" >
		<h1 style= "text-align: center;">Usuario - ABM</h1>
			
		<hr>
		<form data-toggle="validator" method="post" onsubmit="GuardarUsuario(); return false;" role="form" enctype="multipart/form-data">
		
		<div class="col-md-12">
	
	
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
		
			<div class="form-group">
			    <label  for="inputPassword" class="control-label">Password</label>
			    <div class="form-group">
			      <input id="password" type="password" data-minlength="3" pattern="^[_A-z0-9]{1,}$" class="form-control" id="inputPassword" placeholder="Password*" required>
			      <div class="help-block">No puede ser menor a 3(Caracteres Especiales Prohibidos).</div>
		   		</div>
		   	</div>	
		    
		    <div class="form-group">
			      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm*" required>
			      <div class="help-block with-errors">Debe ser la misma clave</div>
			</div>
			<input type="file" id="archivo" onchange="SubirFotoUsuario()">		
			
			<input type="hidden" id="idEntidad" value="0">
			<input type="hidden" id="fotoDescr" value="0">
			<div class="col-md-offset-4" id="divFoto" style="display: none;"></div>
		
			<button type="submit" class="col-md-offset-4 btn btn-success">Agregar</button>	
		

		</div>
		</form>
				
	</div>
<div class="col-md-6 col-md-offset-2">
	<table class="table"  style="text-align:center; color:#000000; background-color: #D3C8C8;">
		<thead style="color: #FFFFFF; background-color: #000000;">
			<tr>
				<td><strong>Editar</strong></td>
				<td><strong>Borrar</strong></td>
				<td><strong>ID</strong></td>
				<td><strong>Tipo</strong></td>
				<td><strong>Nombre</strong></td>
				<td><strong>Mail</strong></td>
				<td><strong>Foto</strong></td>
		</thead>
		<tbody>

<?php 
	//Administrador		
	foreach ($arrayEntidades as $entidad) {
		echo"
			<tr>
				
				<td><a onclick='BorrarUsuario($entidad->id)' class='btn btn-danger'>  Borrar</a></td>
				<td>$entidad->id</td>
				<td>$entidad->tipo</td>
				<td>$entidad->nombre</td>
				<td>$entidad->mail</td>
				<td><img src='imgUsuario/$entidad->id$entidad->nombre.jpg'; alt='imagen' width='100px' height='100px' style='border: 1px solid black'></img></td>
			</tr>   
			";
	}
}
?>
		</tbody>
	</table>
</div>

