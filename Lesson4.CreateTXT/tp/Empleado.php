<?php 
include("Persona.php");
  class Empleado extends Persona{
		private $_legajo;
		private $_sueldo;
		private $_path;


		//Construct
		public function __construct($nombre, $dni, $apellido, $sexo, $legajo, $sueldo, $path){
			parent::__construct($nombre, $dni, $apellido, $sexo);
			$this->_legajo = $legajo;
			$this->_sueldo = $sueldo;
			$this->_path = $path; 
		}

		//Metodos

		public function getLegajo(){
			return $this->_legajo;
		}

		public function getSueldo(){
			return $this->_sueldo;
		}

		public function getPath(){
			return $this->_path;
		}

		public function Hablar(string $hablar){
			parent::Hablar();
		}

		public function ToString(){

			return  parent::ToString().
					/*"Legajo: ".*/$this->_legajo."<br>".
					/*"Sueldo: ".*/$this->_sueldo."<br>".
					/*"Ruta: ". */$this->_path."<br>";
		}

		public function setPath($path){
			$this->_path = $path;
		}
	}

 ?>