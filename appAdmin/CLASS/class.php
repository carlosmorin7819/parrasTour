<?php 
	include 'users.php';
	if ($_POST) {
		$index = $_POST['type_form'];
		//echo $index;
		switch ($index) {
			case 'validate_user':
					$mail = $_POST['mail'];
					$pass = $_POST['pass'];
					users_class::validate_user($mail, $pass);
				break;

			case 'save_user':
					$name = $_POST['name'];
					$nombre = $_FILES['imagen']['name'];
					$mail = $_POST['mail'];
					$pass = $_POST['pass'];
					$phone = $_POST['phone'];
					$type_user = $_POST['type_user'];
					$gender = $_POST['gender'];
					users_class::save_user($name, $mail, $pass, $phone, $type_user, $gender, $nombre);				
				break;


			case 'save_user':
					$name = $_POST['name'];
					$mail = $_POST['mail'];
					$pass = $_POST['pass'];
					$phone = $_POST['phone'];
					$type_user = $_POST['type_user'];
					$gender = $_POST['gender'];
					users_class::save_user($name, $mail, $pass, $phone, $type_user, $gender);			
				break;

			case 'save_costumer':
					$name = $_POST['name'];
					$last_name = $_POST['last_name'];
					$mail = $_POST['mail'];
					$phone = $_POST['phone'];
					$origin_place = $_POST['origin_place'];
					users_class::save_costumer($name, $last_name, $mail, $phone, $origin_place);			
				break;
			
		}
	}
	
 ?>	