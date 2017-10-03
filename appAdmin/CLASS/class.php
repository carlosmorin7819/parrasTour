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
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$gender = $_POST['gender'];
					$type_user = $_POST['type_user'];
					$pass = $_POST['pass'];
					users_class::save_user($name, $phone, $email, $gender, $type_user, $pass);				
				break;

			case 'save_user':
					$name = $_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$pass = $_POST['pass'];

					$type_user = $_POST['type_user'];

					$gender = $_POST['gender'];
					users_class::save_user($name, $phone, $email, $pass, $gender, $type_user);			
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