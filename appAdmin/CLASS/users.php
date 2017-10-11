<?php 
	session_start();
	require 'connect.php';
	class users_class
	{
		
		public static function validate_user($mail, $pass)
		{
			$result = mysql_query("SELECT * FROM users WHERE mail = '$mail' AND pass = '$pass'"); 

			if (mysql_num_rows($result)>0) {
				$row = mysql_fetch_array($result);
				$_SESSION['user'] = $session = array('user' => $row['mail'], 'type_user' => $row['type_user'],);
				//$_SESSION['user'] .= $row['type_user'];
				echo TRUE . "\n";
				//echo "hola si se armo";
				//header("location: ../users.php");
			}else{
				echo FALSE . "\n";
				//echo "hola no se armo";
				//header("location: ../index.php");
			}
			//return false;
	
		}

		public static function save_user($name, $email, $pass, $phone, $type_user, $gender)
		{
			//mysqli_query("INSERT INTO users VALUES('','$name','$phone','$email',$type_user','$pass')");
			//$resultUsers = mysql_query("SELECT * FROM users"); 
		
			$consulta = "INSERT INTO users VALUES('','$name','$phone','$email',$type_user','$pass')";
			if($resultado)
			{
			echo "Enhorabuena, la acción ha sido llevada a cabo con éxito";
			}
			else
			{
			echo "Ha ocurrido un error";
			}
		}

		public static function save_costumer($name, $last_name, $mail, $phone, $origin_place)
		{
			mysql_query("INSERT INTO costumers VALUES('','$name','$last_name','$phone','$mail','$origin_place','','')");
			//$resultUsers = mysql_query("SELECT * FROM users"); 
		}
		
	}
?>