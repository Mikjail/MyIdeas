<?php 

$lampara = 35;


	if (isset($_POST["calcPrecio"])){
			$listLampara = $_POST["listLampara"];
			$marca = $_POST["marca"];

			if($listLampara >= 6 ) {
				$total = $lampara * $listLampara;
				$descuento= $total * 0.50;
				
			}

			elseif ($listLampara == 5){ 
				 if($marca == "ArgentinaLuz") {
				$total = $lampara * 5;
				$descuento = $total  * 0.40;
				}
				else{
					$total =$lampara * 5;
					$descuento = $total * 0.30;
				}
			}

			elseif ($listLampara == 4){ 
			 	if ($marca == "ArgentinaLuz" || $marca == "FelipeLamparas") {
					$total = $lampara * 4;
					$descuento = $total * 0.25;
				}
					else{
						$lampara * 4;
						$descuento = $total * 0.20;
					}
			}

			elseif ($listLampara == 3 ){
				$total = $lampara * 3;
				
				if($marca == "ArgentinaLuz") {
						$descuento = $total * 0.15;
					}
				
				elseif($marca == "FelipeLamparas"){
						$descuento = $total * 0.10;
				}
					else{
						$descuento = $total * 0.05;
					}
			}

			$totalconDesc = $total - $descuento;

		echo "
			<div class='form-group' style='margin-right: 15%;'>
				<label for='Descuento'><h3>SubTotal</h3></label>
				<input type='text' placeholder='Descuento' name='total' value='".$total."'>
			</div>
				


			<div class='form-group' style='margin-right: 15%;'>
				<label for='Descuento'><h3>Descuento</h3></label>
				<input type='text' placeholder='Descuento' name='descuento' value='".$descuento."'>
			</div>
			
			<div class='form-group' style='margin-right: 15%;'>
				<label for='Total'><h3>Total</h3></label>
				<input type='text' placeholder='Total' name='total' value='".$totalconDesc."'>
			</div>" ;

}

		
 ?>