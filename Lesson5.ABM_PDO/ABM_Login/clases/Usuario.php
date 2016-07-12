<?php
include_once("AccesoDatosUsuario.php");
include_once("archivoUsuario.php");
class Usuario
{
	public $id;
	public $mail;
 	public $nombre;
  	public $tipo;
  	public $clave;
  	public $foto;//foto


  	public function BorrarUsuario()
	 {
	 		$objetoAccesoDato = AccesoDatosUsuario::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from usuarios 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 }

	public static function BorrarUsuarioPorId($id)
	 {

			$objetoAccesoDato = AccesoDatosUsuario::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from usuarios 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

	 }
	public function ModificarUsuario()
	 {

			$objetoAccesoDato = AccesoDatosUsuario::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update usuarios 
				set nombre='$this->nombre',
				mail='$this->mail',
				clave='$this->clave',
				tipo = '$this->tipo'
				WHERE id='$this->id'");
			return $consulta->execute();

	 }
	
  
	 public function InsertarUsuario()
	 {
				$objetoAccesoDato = AccesoDatosUsuario::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuarios (tipo,mail,nombre,clave)values('$this->tipo','$this->mail','$this->nombre','$this->clave'");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	  public function ModificarUsuarioParametros()
	 {
			$objetoAccesoDato = AccesoDatosUsuario::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update usuarios 
				set nombre=:nombre,
				mail=:mail,
				clave=:clave,
				tipo=:tipo
				WHERE id=:id");
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
			$consulta->bindValue(':clave', $this->clave, PDO::PARAM_STR);
			$consulta->bindValue(':mail', $this->mail, PDO::PARAM_STR);
			$consulta->bindValue(':tipo', $this->tipo, PDO::PARAM_STR);
			return $consulta->execute();
	 }

	 public function InsertarUsuarioParametros()
	 {
				$objetoAccesoDato = AccesoDatosUsuario::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuarios (nombre, mail, clave, tipo) values (:nombre,:mail,:clave,:tipo)");
				$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
				$consulta->bindValue(':clave', $this->clave, PDO::PARAM_STR);
				$consulta->bindValue(':mail', $this->mail, PDO::PARAM_STR);
				$consulta->bindValue(':tipo', $this->tipo, PDO::PARAM_STR);
				$consulta->execute();	
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	 public function GuardarUsuario()
	 {

	 	if($this->id>0)
	 		{

	 			return	$this->ModificarUsuarioParametros();
	 		
	 		}
	 		else {

	 			return	$this->InsertarUsuarioParametros();
	 		
	 		}

	 }


  	public static function TraerTodosLosUsuarios()
	{
			$objetoAccesoDato = AccesoDatosUsuario::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id as id,nombre as nombre, mail as mail,clave as clave, tipo as tipo from usuarios");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "Usuario");		
	}

	public static function TraerUnUsuario($nombre) 
	{
			$objetoAccesoDato = AccesoDatosUsuario::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id as id, nombre as nombre, mail as mail, clave as clave, tipo as tipo from usuarios where nombre = $nombre");
			$consulta->execute();
			$usuarioBuscado= $consulta->fetchObject('Usuario');
			return $usuarioBuscado;				

			
	}


	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->tipo."  ".$this->nombre."  ".$this->mail;
	}

}