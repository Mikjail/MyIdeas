<?php 
//Habilita a una var super global sesion.
session_start();


include("../clases/Usuario.php");

$queHago = $_POST['queHacer'];
$retorno = "fallido";
switch ($queHago) {
	
	case 'validarModificacion':
		$arrayUsuario=Usuario::TraerTodosLosUsuarios();
		
		foreach ($arrayUsuario as $user) {
			
			if ($_SESSION["usuario"]["nombre"] == $user->nombre && $_POST["clave"] == $user->clave ) {

				$retorno = "exito";
				break;
			}
		}

		break;
	
	case 'validarLogin':
		
		$usuario=$_POST['usuario'];
		$clave=$_POST['clave'];
		$recordar=$_POST['recordarme'];
		$retorno="fallido";

		$arrayUsuario=Usuario::TraerTodosLosUsuarios();

		foreach ($arrayUsuario as $user) {
			if ($user->nombre == $usuario && $user->clave == $clave) {
				
				$_SESSION["usuario"]["id"]= $user->id;
				$_SESSION["usuario"]["usuario"] = $user->tipo; 
				$_SESSION["usuario"]["nombre"] = $user->nombre;
				$_SESSION["usuario"]["email"] = $user->mail;
				$_SESSION["usuario"]["foto"] = "imgUsuario/".$user->id.$user->nombre.".jpg";
				
				$retorno= "exito";
			}
		}
		break;
	
	default:
		$retorno = "fallido";
		break;
}

		echo $retorno;

?>