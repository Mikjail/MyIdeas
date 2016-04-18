<?php 
include("Empleado.php");


class Fabrica {
	private $_empleados;
	private $_razonSocial;

	function __construct($razonSocial){
		$this->_razonSocial = $razonSocial;
		$this->_empleados = array();
	}

	public function AgregarEmpleado($persona)
	{
		array_push($this->_empleados, $persona);
		return true;
	}

	public function CalcularSueldos(){
		$total;

		foreach ($_empleados as $empleados) {
			$total += $empleados->getSueldo();
			return true; 
		}
	}

	public function EliminarEmpleados($persona){
	
		$key = array_search($persona, $this->_empleados);	
		if($key== false){
			return false;
		}
		else{
			unset($this->_empleados[$key]);
		}
	}
	

	public function EliminarEmpleadosRepetidos(){
			
		//Before
		var_dump($this->_empleados);
		echo "<hr>";


		$this->_empleados = array_unique($this->_empleados);
		
		//After
		var_dump($this->_empleados);
		
	}

	public function ToString(){
		$retorno =  "Razon Social: ".$this->_razonSocial."<br>";
		foreach ($this->_empleados as $empleado) {
			$retorno .= $empleado->ToString();
		}
		return $retorno;
	}
}

 ?>