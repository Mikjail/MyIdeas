<?php 	//Primera linea que debe estar para validar sesiones.
	session_start();
if(isset($_SESSION['usuario'])){
		# code...
		require_once("clases/AccesoDatosUsuario.php");
		require_once("clases/Usuario.php");
		$arrayEntidades=Usuario::TraerTodosLosUsuarios();
 ?>
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

