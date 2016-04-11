<?php
 class Persona {

	protected $_apellido;
	protected $_dni;
	protected $_nombre;
	protected $_sexo;

	public function __construct($nombre, $dni, $apellido, $sexo){

		$this->_nombre = $nombre;
		$this->_dni = $dni;
		$this->_apellido = $apellido;
		$this->_sexo = $sexo;

	}

	public function getApellido(){
		return $this->_apellido;	
	}
	public function getDni(){
		return $this->_dni;	
	}
	public function getNombre(){
		return $this->_nombre;	
	}
	public function getSexo(){
		return $this->_sexo;	
	}

	public function Hablar(string $idioma){
		return $idioma;
	}

	public function ToString(){
		return 	"Nombre: ".$this->_nombre."<br>".
				"Apellido: ".$this->_apellido."<br>".
			   	"Dni: ".$this->_dni."<br>".
			   	"Sexo: ".$this->_sexo."<br>";
	}
	
}
?>