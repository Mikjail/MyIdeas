<?phprequire_once ("clases/persona.php");$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;switch($queHago){	case "mostrarGrilla":			break;	case "subirFoto":			break;		case "borrarFoto":				break;			case "agregar":		break;		case "BorrarPersonaPorNombre":		$retorno["Exito"] = TRUE;		$retorno["Mensaje"] = "";		$obj = isset($_POST['id']) ? $_POST['id'] : NULL;			if(!Persona::BorrarPersonaPorNombre($obj) > 0 ){			$retorno["Exito"] = FALSE;			$retorno["Mensaje"] = "Lamentablemente ocurrio un error y no se pudo escribir en el archivo.";		}		echo json_encode($retorno);				break;			case "BorrarPersonaPorID":		$retorno["Exito"] = TRUE;		$retorno["Mensaje"] = "";		$obj = isset($_POST['id']) ? $_POST['id'] : NULL;			if(!Persona::BorrarPersonaPorID($obj) > 0 ){			$retorno["Exito"] = FALSE;			$retorno["Mensaje"] = "Lamentablemente ocurrio un error y no se pudo escribir en el archivo.";		}		echo json_encode($retorno);				break;	default:		echo ":(";}?>