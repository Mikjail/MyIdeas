<?php 
//Habilita a una var super global sesion.
session_start();


include("../clases/Usuario.php");

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$recordar=$_POST['recordarme'];
$retorno="fallido";

$arrayUsuario=Usuario::TraerTodosLosUsuarios();

foreach ($arrayUsuario as $user) {
	if ($user->nombre == $usuario && $user->clave == $clave) {
		
		$_SESSION["usuario"]["usuario"] = $user->tipo; 
		$_SESSION["usuario"]["nombre"] = $user->nombre;
		$_SESSION["usuario"]["email"] = $user->mail;
		$_SESSION["usuario"]["foto"] = "imgUsuario/".$user->id.$user->nombre.".jpg";
		
		$retorno= "exito";
	}
}

		echo $retorno;

?>