<?php 
		if (isset($_POST["farenheit"]) || isset($_POST["grados"])){
			$farenehit=$_POST["farenheit"];
			$grados=$_POST["grados"];
		
		echo $grados." y ". $farenheit;
}
