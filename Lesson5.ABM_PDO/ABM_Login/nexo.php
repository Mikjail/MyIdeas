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

	case "MostrarUsuarios":
		
		include("partes/GrillaUsuario.php");
		
		break;

	case "MostrarSignUp":
		
		include("partes/signUp.php");
		
		break;

	case "MostrarPerfil":
		
		include("partes/perfil.php");
		
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
			if ($entidad->id == 0) {
				if (Archivo::Mover("temp/temporal.jpg","img/".$cantidad."".$entidad->descripcion.".jpg")) {
				echo "Se Modificaron " + $cantidad;
				}	
			}
			else{
				if (Archivo::Mover("temp/temporal.jpg","img/".$entidad->id."".$entidad->descripcion.".jpg")) {
					echo "Se Modificaron " + $cantidad;
				}
				else{
				echo "Hubo un error moviendo el archio";
				}	
			}		
			

		break;
	case 'TraerEntidad':
			$entidad = Entidad::TraerUnaEntidad($_POST['id']);		
			echo json_encode($entidad) ;

		break;

	case 'subirFoto':
		
		$res = Archivo::Subir();
		
		echo json_encode($res);

		break;

	case 'BorrarFoto':
		$fotoPath= $_POST['edicion'];
		$resp;
		if (Archivo::Borrar($fotoPath)) {
				$resp = "Se movio y se borró con exito";
		}

		else{
				$resp ="hubo un error al mover archivo";
		}

		echo $resp;
		break;

	default:
		# code...
		break;
}

 ?>