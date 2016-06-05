<?php 
include_once("clases/Entidad.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	
	case 'MostrarGrilla':
			include("partes/GrillaEntidades.php");
		break;

	case 'MostrarLogin':
			include("partes/logIn.php");
		break;

	case 'BorrarEntidad':
			$entidad = new Entidad();
			$entidad->id=$_POST['id'];
			$cantidad=$entidad->BorrarEntidad();
			echo $cantidad;

		break;
	case 'GuardarEntidad':
			$entidad = new Entidad();
			$entidad->id= $_POST['id'];
			$entidad->marca=$_POST['marca'];
			$entidad->descripcion=$_POST['descripcion'];
			$entidad->fecha=$_POST['fecha'];
			$entidad->tipo=$_POST['tipo'];
			$cantidad=$entidad->GuardarEntidad();
			Archivo::Mover("temp/temporal.jpg","img/".$cantidad."".$entidad->descripcion.".jpg");
			echo $cantidad;

		break;
	case 'TraerEntidad':
			$entidad = Entidad::TraerUnaEntidad($_POST['id']);		
			echo json_encode($entidad) ;

		break;

	case "subirFoto":
		
		$res = Archivo::Subir();
		
		echo json_encode($res);

		break;
	default:
		# code...
		break;
}

 ?>