<?php
class Persona
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $nombre;
 	private $edad;
  	private $correo;
  	private $pathFoto;
  	private $clave;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	
	public function GetNombre()
	{
		return $this->nombre;
	}
	
	public function GetEdad()
	{
		return $this->edad;
	}
	
	public function GetPathFoto()
	{
		return $this->pathFoto;
	}

	public function GetClave(){
		return $this->clave;
	}

	public function GetCorreo(){
		return $this->correo;
	}

	public function SetEdad($valor)
	{
		$this->edad = $valor;
	}
	public function SetNombre($valor)
	{
		$this->nombre = $valor;
	}
	public function SetPathFoto($valor)
	{
		$this->pathFoto = $valor;
	}
	public function SetCorreo($valor){
		$this->correo = $valor;
	}
	public function SetClave($valor){
		$this->clave = $valor;
	}

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($edad=NULL, $nombre=NULL, $correo=NULL ,  $pathFoto=NULL, $clave=NULL)
	{
		if($edad !== NULL && $nombre !== NULL && $clave !== NULL){
			$this->edad = $edad;
			$this->nombre = $nombre;
			$this->clave = $clave;
			$this->correo = $correo;
			$this->pathFoto = $pathFoto;
		}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->edad." - ".$this->nombre." - ".$this->correo." - ".$this->pathFoto." - ".$this->clave."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE
	public static function Guardar($obj)
	{
		$resultado = FALSE;
		
		//ABRO EL ARCHIVO
		$ar = fopen("archivos/personas.txt", "a");
		
		//ESCRIBO EN EL ARCHIVO
		$cant = fwrite($ar, $obj->ToString());
		
		if($cant > 0)
		{
			$resultado = TRUE;			
		}
		//CIERRO EL ARCHIVO
		fclose($ar);
		
		return $resultado;
	}
	public static function TraerTodosLosPersonas()
	{

		$ListaDePersonasLeidos = array();

		//leo todos los Personas del archivo
		$archivo=fopen("archivos/personas.txt", "r");
		
		while(!feof($archivo))
		{
			$archAux = fgets($archivo);
			$personas = explode(" - ", $archAux);
			//http://www.w3schools.com/php/func_string_explode.asp
			$personas[0] = trim($personas[0]);
			if($personas[0] != ""){
				$ListaDePersonasLeidos[] = new Persona($personas[0], $personas[1],$personas[2], $personas[3], $personas[4]);
			}
		}
		fclose($archivo);
		
		return $ListaDePersonasLeidos;
		
	}
	public static function Modificar($obj)
	{
		$resultado = TRUE;
		
		$ListaDePersonasLeidos = Persona::TraerTodosLosPersonas();
		$ListaDePersonas = array();
		$imagenParaBorrar = NULL;
		
		for($i=0; $i<count($ListaDePersonasLeidos); $i++){
			if($ListaDePersonasLeidos[$i]->clave == $obj->clave){//encontre el modificado, lo excluyo
				$imagenParaBorrar = trim($ListaDePersonasLeidos[$i]->pathFoto);
				continue;
			}
			$ListaDePersonas[$i] = $ListaDePersonasLeidos[$i];
		}

		array_push($ListaDePersonas, $obj);//agrego el Persona modificado
		
		//BORRO LA IMAGEN ANTERIOR
		unlink("archivos/".$imagenParaBorrar);
		
		//ABRO EL ARCHIVO
		$ar = fopen("archivos/personas.txt", "w");
		
		//ESCRIBO EN EL ARCHIVO
		foreach($ListaDePersonas AS $item){
			$cant = fwrite($ar, $item->ToString());
			
			if($cant < 1)
			{
				$resultado = FALSE;
				break;
			}
		}
		
		//CIERRO EL ARCHIVO
		fclose($ar);
		
		return $resultado;
	}
	public static function Eliminar($nombre)
	{
		if($nombre === NULL)
			return FALSE;
			
		$resultado = TRUE;
		
		$ListaDePersonasLeidos = Persona::TraerTodosLosPersonas();
		$ListaDePersonas = array();
		$imagenParaBorrar = NULL;
		
		for($i=0; $i<count($ListaDePersonasLeidos); $i++){
			if($ListaDePersonasLeidos[$i]->nombre == $nombre){//encontre el borrado, lo excluyo
				$imagenParaBorrar = trim($ListaDePersonasLeidos[$i]->pathFoto);
				continue;
			}
			$ListaDePersonas[$i] = $ListaDePersonasLeidos[$i];
		}

		//BORRO LA IMAGEN ANTERIOR
		unlink("archivos/".$imagenParaBorrar);
		
		//ABRO EL ARCHIVO
		$ar = fopen("archivos/personas.txt", "w");
		
		//ESCRIBO EN EL ARCHIVO
		foreach($ListaDePersonas AS $item){
			$cant = fwrite($ar, $item->ToString());
			
			if($cant < 1)
			{
				$resultado = FALSE;
				break;
			}
		}
		
		//CIERRO EL ARCHIVO
		fclose($ar);
		
		return $resultado;
	}
//--------------------------------------------------------------------------------//
}