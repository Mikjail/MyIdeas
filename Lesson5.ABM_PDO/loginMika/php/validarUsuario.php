<?php 
//Habilita a una var super global sesion.
session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$recordar=$_POST['recordarme'];

$retorno;

	if($usuario=="admin" && $clave=="admin")
	{
		//$_SESSION['registrado']="admin";
		$_SESSION["usuario"] = "admin"; 

		$retorno=$_SESSION["usuario"];
	}
	if ($usuario=="user" && $clave == "user") {
		
		$_SESSION["usuario"] = "user";
		$retorno=$_SESSION["usuario"];
	}
	else
	{
		$retorno= "No-esta";
	}

echo $retorno;
?>