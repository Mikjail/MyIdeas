<?php
	class Alumno{
		public $nombre;
		public $apellido;
		public $edad;

		public function Mostrar(){
			$this->RetornarDatos();	
		}

		private function RetornarDatos(){
				echo "<br>". "Su Nombre es: ".$this->nombre ." y su apellido es: ". $this->apellido;	
		}

		public static function MostrarAhora($dato){
				$dato->Mostrar();
			}


	}
	?>