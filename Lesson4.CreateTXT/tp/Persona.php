<?php
 class Persona {

	protected $apellido;
	protected $dni;
	protected $nombre;
	protected $sexo;

	public function __construct($nombre, $dni, $apellido, $sexo){

		$this->nombre = $nombre;
		$this->dni = $dni;
		$this->apellido = $apellido;
		$this->sexo = $sexo;

	}

	public function getApellido(){
		return $this->apellido;	
	}
	public function getDni(){
		return $this->dni;	
	}
	public function getNombre(){
		return $this->nombre;	
	}
	public function getSexo(){
		return $this->sexo;	
	}

	public function Hablar(string $idioma){
		return $idioma;
	}

	public function ToString(){
		return 	"<br>Nombre: ".$this->nombre."<br>".
				"Apellido: ".$this->apellido."<br>".
			   	"Dni: ".$this->dni."<br>".
			   	"Sexo: ".$this->sexo."<br>";
	}
	
}
?>