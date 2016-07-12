<?php 
session_start();
include_once("clases/Usuario.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {


	case 'GuardarUsuario':
	$usuario = new Usuario();
			$usuario->id= $_POST['id'];
			$usuario->clave=$_POST['clave'];
			$usuario->nombre=$_POST['nombre'];
			$usuario->mail=$_POST['mail'];
			$usuario->tipo=$_POST['tipo'];
			$cantidad=$usuario->GuardarUsuario();
			if ($usuario->id == 0) {
				if (ArchivoUsuario::Mover("tempUsu/temporal.jpg","imgUsuario/".$cantidad."".$usuario->nombre.".jpg")) {
				echo "Se Modificaron " + $cantidad;
				}	
			}
			else{
				if (ArchivoUsuario::Mover("tempUsu/temporal.jpg","imgUsuario/".$usuario->id."".$usuario->nombre.".jpg")) {
					$arrayUsuario=Usuario::TraerTodosLosUsuarios();

					foreach ($arrayUsuario as $user) {
						if ($user->nombre == $usuario->nombre && $user->clave == $usuario->clave) {
							
							$_SESSION["usuario"]["id"]= $user->id;
							$_SESSION["usuario"]["usuario"] = $user->tipo; 
							$_SESSION["usuario"]["nombre"] = $user->nombre;
							$_SESSION["usuario"]["email"] = $user->mail;
							$_SESSION["usuario"]["foto"] = "imgUsuario/".$user->id.$user->nombre.".jpg";
							
							echo "exito";	
						}
					}
				}
				else{
				echo "Hubo un error moviendo el archio";
				}	
			}
	break;
	
	case 'subirFoto':
		
		$res = ArchivoUsuario::Subir();
		
		echo json_encode($res);

		break;

		case 'BorrarUsuario':
			$usuario = new Usuario();
			$usuario->id=$_POST['id'];
			$cantidad=$usuario->BorrarUsuario();
			echo $cantidad;

		break;	
	default:
		# code...
		break;
}

 ?>