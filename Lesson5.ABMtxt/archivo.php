<?php 	
class Archivo{

	public static function Subir(){
		$retorno["Exito"] = TRUE;

		//Indico cual sera el destino del archivo subido

		$archivoTmp = date("Ymd_His")."jpg";


		//Guardo en variable el destino donde queremos guardar el archivo
		$destino = "tmp/"$archivoTmp;

		//valido el tamano del archivo
		if ($_FILES["archivo"]["size"]> 500000) {

			$retorno["Exito"] = false;
			$retorno["Mensaje"]="El arcvhivo es demasiado grande. Verifique!";

			return $retorno;
		}

		//guardo en valiable el tipo de archivo que estoy recibiendo
		$tipoArchivo = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);

		//Valido que el archivo sea una imagen (Si devuelve true == imagen)
		$esImagen = getimagesize($_FILES["archivo"]["tmp_name"]);

		if($esImagen == false){
			$retorno["Exito"] = False;
			$retorno["Mensaje"] = $"S&oacute;lo son permitidas IMAGENES.";
			return $retorno;
		}
		else{

			//Valido que el tipo de archivo coincida con los permitidos
			if ($tipoArchivo != "jpg" &&
				$tipoArchivo != "jpeg" &&
				$tipoArchivo != "png") {
					
				$retorno["Exito"] = False;
				$retorno["Mensaje"] = $"S&oacute;lo son permitidas IMAGENES.";
				return $retorno; 
			}
		}	

		//Muevo el archivo que se quiere subir a ubicación

		if(!move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)){

			$retorno["Exito"] = FALSE;
			$retorno["Mensaje"] = "Ocurrio un error al subir el archivo. No pudo guardarse.";
			return $retorno;	
		}
		else{
			$retorno["Mensaje"] = "Archivo subido exitosamente!";
			$retorno["Html"] = "<img src=".$destino." alt='foto' width='300px' height='300px' />
								<input type='button' value='Borrar Foto' onclick='BorrarFoto()' class='MiBotonUTN' style='width:500px' />
								<input type='hidden' id='hdnArchivoTemp' value='".$archivoTmp."' />";
			//$retorno["PathTemporal"] = $destino;

			return $retorno;
		}

	}

	public function Borrar($path){
		return unlink($path);
	}

	public static Function Mover($pathOrigen, $pathDestino){
		return copy($pathOrigen, $pathDestino);
	}

}



 ?>