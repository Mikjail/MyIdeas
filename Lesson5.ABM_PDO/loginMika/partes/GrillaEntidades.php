<?php 
	//Primera linea que debe estar para validar sesiones.
	session_start();
	if(isset($_SESSION['usuario'])){
		# code...
		require_once("clases/AccesoDatos.php");
		require_once("clases/Entidad.php");
		$arrayEntidades=Entidad::TraerTodasLasEntidades();
		
	
	if ($_SESSION['usuario'] == "admin"){ 
 ?>
 
	<div class= "col-md-4 signUpForm" >
		<h1 style= "text-align: center;">UTN - Agregar Entidad</h1>	
		<hr>
		<div class="col-md-offset-4" id="divFoto" ></div><br>
		<form data-toggle="validator" role="form" method="POST" onsubmit="GuardarEntidad(); return false;" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="Marca">Marca</label>
			    <div class="form-group">
			        <input id="marca" class="marca1" type="radio" name="marca" value="Cocacola" required>
			        <strong>Cocacola</strong>
			    	<br>
			        <input id="marca" class="marca2" type="radio" name="marca" value="Polar" required>
			    	<strong>Polar</strong>
			    	<br>
			        <input id="marca" class="marca3" type="radio" name="marca" value="Pepsico" required>
			        <strong>Pepsico</strong>
			    </div>
			</div>

			<div class="form-group">
			    <label for="descripcion" class="control-label">Descripcion</label>
			    <input type="text" class="form-control" id="descripcion" pattern="^[A-z]{1,}$" maxlength="15" placeholder="Descripcion*" data-error="We only accept a-Z names!" required>
				<div class="help-block with-errors">A-z</div>
			</div>
			
			
			<div class="form-group">
				    <label for="fecha" class="control-label">Fecha Vto</label>
				    <input type="text" class="form-control" id="fecha" placeholder="Fecha Vto*" data-error="Invalid mail adress!" required>
				    <div class="help-block with-errors">dd-mm-yyyy</div>
			</div>

			<div class="form-group">
				<label for="tipo">Tipo</label>	
				<select id="tipo" class="form-control">
				  <option value="Lacteos">Lacteos</option>
				  <option value="Carnes">Carnes</option>
				  <option value="Hogar">Hogar</option>
				</select>
				<div class="help-block with-errors">Elige el área</div>
			</div>
				
			<input type="file" id="archivo" onchange="SubirFoto()">	
			<input type="hidden" id="idEntidad" value="0">
			
			 <button type="submit" class="col-md-offset-4 btn btn-success">Agregar</button>	
		</form>
				
	</div>
			

			

 <div class="col-md-6 col-md-offset-2">
	<table class="table"  style="text-align:center; color:#000000; background-color: #D3C8C8;">
		<thead style="color: #FFFFFF; background-color: #000000;">
			<tr>
				<td><strong>Editar</strong></td>
				<td><strong>Borrar</strong></td>
				<td><strong>ID</strong></td>
				<td><strong>Marca</strong></td>
				<td><strong>Descripcion</strong></td>
				<td><strong>Fecha Vto</strong></td>
				<td><strong>Tipo</strong></td>
				<td><strong>Imagen</strong></td>
			</tr>
		</thead>
		<tbody>

<?php 
	//Administrador		
	foreach ($arrayEntidades as $entidad) {
		echo"
			<tr>
				<td><a onclick='EditarEntidad($entidad->id)' class='btn btn-warning'> Editar</a></td>
				<td><a onclick='BorrarEntidad($entidad->id)' class='btn btn-danger'>  Borrar</a></td>
				<td>$entidad->id</td>
				<td>$entidad->marca</td>
				<td>$entidad->descripcion</td>
				<td>$entidad->fecha</td>
				<td>$entidad->tipo</td>
				<td><img src='img/$entidad->id$entidad->descripcion.jpg'; alt='imagen' width='100px' height='100px' style='border: 1px solid black'></img></td>
			</tr>   
			";
	}
}
?>
		</tbody>
	</table>
</div>

<?php
if ($_SESSION["usuario"]=="user") {
?>
<div class="col-md-6 col-md-offset-3">
	<table class="table"  style="text-align:center; color:#000000; background-color: #D3C8C8;">
		<thead style="color: #FFFFFF; background-color: #000000;">
			<tr>
				<td><strong>ID</strong></td>
				<td><strong>Marca</strong></td>
				<td><strong>Descripcion</strong></td>
				<td><strong>Fecha Vto</strong></td>
				<td><strong>Tipo</strong></td>
			</tr>
		</thead>
		<tbody>
		
<?php	//Usuario 		
	foreach ($arrayEntidades as $entidad) {
		echo"
			<tr>
				<td>$entidad->id</td>
				<td>$entidad->marca</td>
				<td>$entidad->descripcion</td>
				<td>$entidad->fecha</td>
				<td>$entidad->tipo</td>
				</tr>   
			";
	}
}
?>
		</tbody>
	</table>
</div>
<?php

}
else{
	echo "<h1>Bienvenido a nuestra Web Page!</h1>";
}
// sin login 
	
	 ?>