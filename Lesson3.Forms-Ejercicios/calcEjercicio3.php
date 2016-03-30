<?php 

		if (isset($_POST["farenheit"]) || isset($_POST["centigrados"])){
			$grados= $_POST["grados"];
		
			if(isset($_POST["centigrados"])){
				echo $grados;
			}

		}
