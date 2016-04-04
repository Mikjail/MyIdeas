<?php 

		if (isset($_POST["fahrenheit"]) || isset($_POST["centigrados"])){
			$grados= $_POST["grados"];
			$fahrenheit= $grados * (9/5 + 32);
			$centigrados= ($grados -32) * 5/9;


			if(isset($_POST["centigrados"])){
				echo number_format((float)$centigrados, 2, '.', '');
			}
			else{
				echo  number_format((float)$fahrenheit, 2, '.', '');
			}

		}