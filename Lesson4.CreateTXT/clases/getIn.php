<?php 
		var_dump($_POST);

		if (isset($_POST["signup"])) {
			$name = $_POST["name"];
			$lastName = $_POST["lastName"];
			$bday = $_POST["dateBirth"];
			$gender = $_POST["gender"];
			$city = $_POST["city"];
			$email = $_POST["email"];
			$password = $_POST["password"];
		}
 ?>