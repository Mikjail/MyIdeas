<?php
class Entidad
{
	public $id;// id
 	public $descripcion;//titulo
  	public $marca;//cantante
  	public $fecha;//año
  	public $tipo;

  	public function BorrarEntidad()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from entidades 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 }

	public static function BorrarEntidadPorId($id)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from entidades 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

	 }
	public function ModificarEntidad()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update entidades 
				set descripcion='$this->descripcion',
				marca='$this->marca',
				fecha='$this->fecha',
				tipo = '$this->tipo'
				WHERE id='$this->id'");
			return $consulta->execute();

	 }
	
  
	 public function InsertarLaEntidad()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into entidades (descripcion,marca,fecha,tipo)values('$this->descripcion','$this->marca','$this->fecha','$this->tipo'");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
				

	 }

	  public function ModificarEntidadParametros()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update entidades 
				set descripcion=:descripcion,
				marca=:marca,
				fecha=:fecha,
				tipo=:tipo
				WHERE id=:id");
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':descripcion',$this->descripcion, PDO::PARAM_INT);
			$consulta->bindValue(':fecha', $this->fecha, PDO::PARAM_STR);
			$consulta->bindValue(':marca', $this->marca, PDO::PARAM_STR);
			$consulta->bindValue(':tipo', $this->tipo, PDO::PARAM_STR);
			return $consulta->execute();
	 }

	 public function InsertarLaEntidadParametros()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into entidades (descripcion,marca,fecha)values(:descripcion,:marca,:fecha)");
				$consulta->bindValue(':descripcion',$this->descripcion, PDO::PARAM_INT);
				$consulta->bindValue(':fecha', $this->fecha, PDO::PARAM_STR);
				$consulta->bindValue(':marca', $this->marca, PDO::PARAM_STR);
				$consulta->bindValue(':tipo', $this->tipo, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	 public function GuardarEntidad()
	 {

	 	if($this->id>0)
	 		{
	 			$this->ModificarEntidadParametros();
	 		}else {
	 			$this->InsertarLaEntidadParametros();
	 		}

	 }


  	public static function TraerTodasLasEntidades()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,descripcion as descripcion, marca as marca,fecha as fecha, tipo as tipo from entidades");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "Entidad");		
	}

	public static function TraerUnaEntidad($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id, descripcion as descripcion, marca as marca,fecha as fecha, tipo as tipo from entidades where id = $id");
			$consulta->execute();
			$entidadBuscada= $consulta->fetchObject('Entidad');
			return $entidadBuscada;				

			
	}

	public static function TraerUnaEntidadNombre($nombre) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  descripcion as descripcion, marca as marca,fecha as fecha, tipo as tipo from entidades  WHERE nombre=?");
			$consulta->execute(array($nombre));
			$entidadBuscada= $consulta->fetchObject('Entidad');
      		return $entidadBuscada;				

			
	}

	public static function TraerUnaEntidadMarca($marca) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  descripcion as descripcion, marca as marca,fecha as fecha, tipo as tipo from entidades  WHERE marca=:marca");
			$consulta->execute(array($marca));
			$consulta->execute();
			$entidadBuscada= $consulta->fetchObject('Entidad');
      		return $entidadBuscada;				

			
	}
	
	public static function TraerUnaEntidadArayTipo($tipo) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  descripcion as descripcion, marca as marca,fecha as fecha, tipo as tipo from entidades  WHERE nombre=:nombre");
			$consulta->execute(array(':tipo'=> $tipo));
			$consulta->execute();
			$entidadBuscada= $consulta->fetchObject('Entidad');
      		return $entidadBuscada;				

			
	}

	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->descripcion."  ".$this->marca."  ".$this->fecha;
	}

}