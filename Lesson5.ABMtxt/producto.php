<?php 

class Producto{
	private $codBarras;
	private $nombre;
	private $pathFoto;



/***************************SETTERS Y GETTERS***********************/
	public function getCodBarras(){
		return $this->codBarras;
	}

	public function getNombre(){
		return $this->codBarras;
	}
	public function getPathFoto(){
		return $this->codBarras;
	}
	
	public function setCodBarras($codBarrasNuevo){
		$this->codBarras = $codBarrasNuevo;
	}

	public function setNombre($nombreNuevo){
		$this->nombre = $nombrNuevo;
	}

	public function setPathFoto($path){
		$this->pathFoto = $path;
	}
/************************CONSTRUCTOR****************************/

	public function __construct($codBar=null, $nombre=null, $path=null ){
		if ($codBar != null && $nomre != null) {
			$this->codbarras = $codBar;
			$this->nombre = $nombre;
			$this->pathFoto = $path;
		}
	}
/*****************************METODOS*********************************/
public static function Guardar($obj){

	$resultado = false;

	//Abro el archivo

	$archivo = fopen("archivos/productos.txt", "a");

	//Escribo sobre el archivo
	$cant = fwrite($archivo, $obj->ToString());

	if ($ant>0) {
		$resultado = true;
	}

	//Cierro el archivo
	fclose($archivo);

	return $resultado;

}


public static function TraerTodosLosProductos(){

	//CREO UN ARRAY DE LOS PRODUCTOS QUE VOY A LEER
	$listaProductosLeidos = array();

	$archivo = fopen("archivos/productos.txt", "r");

	while (!feof($archivo)) {
		$lineaLeida = fgets($archivo);
		$productos = explode($lineaLeida, " ");

		$productos[0]= trim($productos[0]);

		if ($producto[0] != "") {
		 	$listaProductosLeidos[] = new Producto($productos[0], $productos[1], $productos[2]);
		}

	}
	fclose($archivo);

	return $listaProductosLeidos;
}

public static function Modificar($obj){

	$resultado = true;

	$listaProductosLeidos = Producto::TraerTodosLosProductos();
	$listaNuevaDeProductos= array();
	$imagenParaBorrar= null;

	for ($i=0; $i < sizeof($listaProductosLeidos); $i++) { 
		if ($listaProductosLeidos[$i]->codBarras == $obj->codBarras) {
	// Encuentro producto que deseo modificar y le paso su path para borrar imagen del archivo
			$imagenParaBorrar = trim($listaProductosLeidos[$i]->pathFoto);

	//Continua a un i++ y no se guarda dicho producto en la lista		
			continue;
		}
		$listaNuevaDeProductos[$i] = $listaProductosLeidos[$i];
	}

	//se guarda el nuevo producto que fue modificado

	array_push($listaNuevaDeProductos, var)

	//Borro la imagen anterior
	unlink("archivos/"$imagenParaBorrar);

	//Abro el archivo para volver a escribir sobre el
	$archivo = fopen("archivos/productos.txt");
	//Escribo nuevamente el archivo txt
	foreach ($listaNuevaDeProductos as $item) {
		$cant = fwrite($archivo, $item->ToString())
		
		//Valido que haya escrito!
		if ($cant<1) {
			$resultado = False;
			breakl
		}
	}

	//Cierro el archivo
	fclose($ar);

	return $resultado;
}

public static function Eliminar($codBarra){

	if ($codBarra == null) {
		return false;
	}

	$resultado = true;

	$ListaDeProductosLeidos = Producto::TraerTodosLosProductos();

	$ListaNuevaDeProductos = array();

	$imagenParaBorrar = null;

	for ($i=0; $i <($ListaDeProductosLeidos); $i++) { 
		if ($ListaDeProductosLeidos[i]->codBarra == $codBarra) {
			$imagenParaBorrar = trim($listaNuevaDeProductos[i]->getPathFoto());
			continue;
		}
		$ListaNuevaDeProductos[$i] = $listaProductosLeidos[i];
	}

	unlink("archivos/"$imagenParaBorrar);

	$archivo = fopen("archivos/productos.txt", "w");

	foreach ($listaNuevaDeProductos as $item) {
	
		$cant = fwrite($archivo,$item->ToString());
	
		if ($cant <1) {
			$resultado = false;
			break;
		}
	}
	fclose($ar);

	return $resultado;
}

/***********************************TO String*******************/

public function ToString(){

	return $this->codBarra." ".$this->nombre." ".$this->pathFoto;
}


}

 ?>