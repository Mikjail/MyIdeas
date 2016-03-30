<?php 
		if (isset($_POST["rectangulo"]) || isset($_POST["alambre"]) || isset($_POST["materiales"])){
			$ancho=$_POST["ancho"];
			$largo=$_POST["largo"];
			$radio=$_POST["radio"];

			


			if(isset($_POST["rectangulo"])){ 
				/*Calcular Rectangulo*/

				$rectangulo = ($ancho * $largo) * 3;
				CalcularRectangulo($rectangulo);		
				
			}

			if(isset($_POST["alambre"])){

				$alambre = ($radio * 2) * 3;
				CalcularAlambre($alambre);
			}

			if(isset($_POST["materiales"])){	
		
				$material= $ancho + $largo;
				CalcularMaterial($material);
		}
	}
			

/*************************METODO RECTANGULO*****************************/
	 function CalcularRectangulo($rectangulo){

				if($_POST["radio"]!= null || $rectangulo < 1) {
						echo "<h3 style='color: red;'>
					Rectangulo de Alambre<hr></h3>
						<ul>
						<li>Calculo: (Ancho x Largo) * 3</li>
						<li>Radio: debe estar vacio</li>
						<li>Debe ingresar numeros positivos</li>	
						</ul>
						";
					
				}

				else{
					echo "<h3 style='color: red;'>
					Rectangulo de Alambre<hr>"
					.$rectangulo.
					"</h3>
					<h4>(Ancho x Largo)<br>x 3<br> hilos de alambre.</h4>
					<br>"
					;
				}
	}

/*************************METODO RECTANGULO*****************************/

function CalcularAlambre($alambre){

			if(($_POST["largo"]!= null  && $_POST["ancho"]!=null) || $alambre < 1) {
						echo "<h3 style='color: red;'>Circulo<hr></h3>
						<ul>
						<li>Calculo: (Radio x 2) * 3</li>
						<li>Ancho y Largo: deben estar vacios</li>
						<li>Debe ingresar numeros positivos</li>	
						</ul>
						";
				}
				else{
					echo "<h3 style='color: red;'>
					Circulo de Alambre<hr>"
					.$alambre.
					"</h3>
					<h4>(Radio x 2)<br>x 3<br> hilos de alambre.</h4>
					<br>"
					;
				}
}

/*************************METODO RECTANGULO*****************************/
function CalcularMaterial($material){

			if($_POST["radio"]!= null || $material < 1) {
						echo "<h3 style='color: red;'>Material<hr></h3>
						<ul>
						<li>Calculo:Ancho + Largo</li>
						<li>Radio: debe estar vacio</li>
						<li>Debe ingresar numeros positivos</li>	
						</ul>
						";
				}
				else{
					echo "<h3 style='color: red;'>
					Material<hr>"
					.$material.
					"</h3>
					<h4>Bolsas de Cemento<br> Ancho + Largo</h4>
					<br>"
					;
				}
}
