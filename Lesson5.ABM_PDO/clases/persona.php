<?php
require_once("AccesoDatos.php");
class Persona
{	
	public $id; //id
	public $legajo; //legajo
 	public $nombre;//titulo
  	public $sexo;//cantante
  	public $edad;//año



  	public function BorrarPersona()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from personas 				
				WHERE legajo=:legajo");	
				$consulta->bindValue(':legajo',$this->legajo, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

	 }
	 	public static function BorrarPersonaPorID($id)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from personas 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

	 }

	 	public static function BorrarPersonaPorNombre($nombre)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from personas 				
				WHERE nombre=:nombre");	
				$consulta->bindValue(':nombre',$nombre, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

	 }
	public function ModificarPersona()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update personas 
				set nombre='$this->nombre',
				sexo='$this->sexo',
				edad='$this->edad'
				WHERE legajo='$this->legajo'");
			return $consulta->execute();

	 }
	 public function ModificarpersonaParametros()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update personas 
				set nombre=:nombre,
				sexo=:sexo,
				edad=:edad
				WHERE legajo=:legajo");
			$consulta->bindValue(':legajo',$this->legajo, PDO::PARAM_INT);
			$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_INT);
			$consulta->bindValue(':edad', $this->edad, PDO::PARAM_STR);
			$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
			return $consulta->execute();
	 }

  	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->nombre."  ".$this->sexo."  ".$this->edad;
	}
	 public function InsertarLaPersona()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into personas (nombre,sexo,edad)values('$this->nombre','$this->sexo','$this->edad')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimolegajoInsertado();
				

	 }
	 public function InsertarLaPersonaParametros()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into personas (nombre,sexo,edad)values(:nombre,:sexo,:edad)");
				$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_INT);
				$consulta->bindValue(':edad', $this->edad, PDO::PARAM_STR);
				$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimolegajoInsertado();
	 }
	 


  	public static function TraerTodasLaspersonas()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id as id, legajo as legajo,nombre as nombre, sexo as sexo,edad as edad from personas");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "persona");		
	}

	public static function TraerUnpersona($legajo) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select legajo, nombre as nombre, sexo as sexo,edad as edad from personas where legajo = $legajo");
			$consulta->execute();
			$personaBuscado= $consulta->fetchObject('persona');
			return $personaBuscado;				

			
	}

	public static function TraerUnpersonaedad($legajo,$edad) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  nombre as nombre, interpret as sexo,edad as edad from personas  WHERE legajo=? AND edad=?");
			$consulta->execute(array($legajo, $edad));
			$personaBuscado= $consulta->fetchObject('persona');
      		return $personaBuscado;				

			
	}

	public static function TraerUnpersonaedadParamNombre($legajo,$edad) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  nombre as nombre, interpret as sexo,edad as edad from personas  WHERE legajo=:legajo AND edad=:edad");
			$consulta->bindValue(':legajo', $legajo, PDO::PARAM_INT);
			$consulta->bindValue(':edad', $edad, PDO::PARAM_STR);
			$consulta->execute();
			$personaBuscado= $consulta->fetchObject('persona');
      		return $personaBuscado;				

			
	}
	
	public static function TraerUnpersonaedadParamNombreArray($legajo,$edad) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  nombre as nombre, interpret as sexo,edad as edad from personas  WHERE legajo=:legajo AND edad=:edad");
			$consulta->execute(array(':legajo'=> $legajo,':edad'=> $edad));
			$consulta->execute();
			$personaBuscado= $consulta->fetchObject('persona');
      		return $personaBuscado;				

			
	}



}