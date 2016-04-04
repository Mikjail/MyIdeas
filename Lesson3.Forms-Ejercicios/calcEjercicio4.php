<?php 

$lampara = 35;

	if (isset($_POST["Total"])){
			$listLampara = $_POST["listLampara"];
			$marca = $POST["marca"];

			if($listLampara >= 6 ) {
				$descuento= $lampara * 0.50;
				
			}
			elseif ($listLampara == 5 && $marca == "ArgentinaLuz") {
				$descuento = $lampara * 0.40;
			}
				else{
					$descuento = $lampara * 0.30;
				}
			elseif ($listLampara == 4 && ($marca == "ArgentinaLuz" || $marca != "FelipeLamparas")  ) {
					$descuento = $lampara * 0.25;
					}
					else{
						$descuento = $lampara * 0.20;
					}		

		}
 ?>