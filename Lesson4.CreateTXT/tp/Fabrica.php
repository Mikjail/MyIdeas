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
			$total += $empleados->_sueldo;
			return true; 
		}
	}

	public function EliminarEmpleados($persona){
	
		unset($this->_empleados[$presona->dni]);
		return true;
	}
	

	public function EliminarEmpleadosRepetidos(){
		foreach ($_empleados as $empleado) {
			# code...
		}
	}

	public function ToString(){
		echo "Razon Social: ".$this->_razonSocial."<br>";
		foreach ($this->_empleados as $empleado) {
			echo $empleado->ToString();
		}
	}
}

 ?>