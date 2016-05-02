<?php 
include("Empleado.php");


class Fabrica {
	private $_empleados;
	private $_razonSocial;

	function __construct($razonSocial){
		$this->_razonSocial = $razonSocial;
		$this->_empleados = array();
		$this->ObtenerEmpleadosTxt();
	
	}

	public function AgregarEmpleado($persona){
		if (array_push($this->_empleados, $persona)) {
				$this->EliminarEmpleadosRepetidos();
				return true;
			} else{
				return false;
			}
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
		if($key == false){
			return false;
		}
		else{
			unset($this->_empleados[$key]);
		}
	}
	

	public function EliminarEmpleadosRepetidos(){
		//var_dump($this->_empleados);

		//$this->_empleados = array_unique($this->_empleados);	

		//var_dump($this->_empleados);	
	}

	public static function Guardar($fabrica){
	
		$archivo = fopen("archivosTP3/empleados.txt","a");
		$linea = $fabrica->ToString();
		fwrite($archivo, $linea);

		fclose($archivo);


		echo "<a href='Mostrar.php'>Los datos fueron guardados!</a>" ;
			
	}

	private function ObtenerEmpleadosTxt(){
		if (file_exists("archivosTP3/empleados.txt")){
				
			$archivo = fopen("archivosTP3/empleados.txt", "r");
			while(!feof($archivo)){
				$line = fgets($archivo);
				$arrayEmpleado = explode(" ", $line);
				if($arrayEmpleado[0] !=""){
					$empleado = new Empleado($arrayEmpleado[1],
						$arrayEmpleado[3],
						$arrayEmpleado[2],
						$arrayEmpleado[4],
						$arrayEmpleado[5],
						$arrayEmpleado[6],
						$arrayEmpleado[7]);
						$this->AgregarEmpleado($empleado);
				}
			}
		}
	}
	

	public static function ToArrayEmpleados($fabrica){
		return $fabrica->_empleados;
	}

	public function ToString(){

		$retorno= $this->_razonSocial." ";
		foreach ($this->_empleados as $empleado) {
			$retorno .=$empleado->ToString()."\n";
		}
		return $retorno;
	}
}
 ?>