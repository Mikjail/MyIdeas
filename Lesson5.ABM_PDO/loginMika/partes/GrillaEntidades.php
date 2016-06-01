<?php 
	//Primera linea que debe estar para validar sesiones.
	session_start();
	if(isset($_SESSION['usuario'])){
		# code...
		require_once("clases/AccesoDatos.php");
		require_once("clases/Entidad.php");
		$arrayEntidades=Entidad::TraerTodasLasEntidades();
		
	
 ?>
 
	<div class= "col-md-4 signUpForm" >
		<h1 style= "text-align: center;">UTN - Agregar Entidad</h1>	
		<hr>

		<form data-toggle="validator" role="form" method="POST" onsubmit="GuardarEntidad(); return false;">
			<div class="form-group">
				<label for="Marca">Marca</label>
			    <div class="radio">
			      <label>
			        <input id="marca" type="radio" name="marca" required>
			        <strong>Cocacola</strong>
			      </label>
			    </div>
			    <div class="radio">
			      <label>
			        <input type="radio" name="marca" required>
			        <strong>Polar</strong>
			      </label>
			    </div>
			     <div class="radio">
			      <label>
			        <input type="radio" name="marca" required>
			        <strong>Pepsico</strong>
			      </label>
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
				<select class="form-control">
				  <option>Lacteos</option>
				  <option>Carnes</option>
				  <option>Hogar</option>
				</select>
				<div class="help-block with-errors">Elige el área</div>
			</div>


			 <button type="submit" class="col-md-offset-4 btn btn-success">Agregar</button>	
		</form>			
	</div>
			

	

 <div class="col-md-6 col-md-offset-2">
	<table class="table"  style="color:#FFFFFF; background-color: #000000;">
		<thead>
			<tr>
				<th>Editar</th><th>Borrar</th><th>Marca</th><th>Descripcion</th><th>Fecha Vto</th><th>Tipo</th>
			</tr>
		</thead>
		<tbody>

			<?php 

	foreach ($arrayEntidades as $entidad) {
		echo"
			<tr>
				<td><a onclick='EditarEntidad($entidad->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
				<td><a onclick='BorrarEntidad($entidad->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
				<td>$entidad->marca</td>
				<td>$entidad->descripcion</td>
				<td>$entidad->fecha</td>
				<td>$entidad->tipo</td>
			</tr>   
			";
	}
			 ?>
		</tbody>
	</table>
</div>

<?php 
}
else{
	echo "<h1>No esta Logeado</h1>";
}
// sin login 
	
	 ?>