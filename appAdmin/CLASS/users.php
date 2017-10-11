<?php 
	session_start();
	require 'connect.php';
	class users_class
	{
		
		public static function validate_user($email, $pass)
		{
			$result = mysql_query("SELECT * FROM users WHERE email = '$email' AND pass = '$pass'"); 

			if (mysql_num_rows($result)>0) {
				$row = mysql_fetch_array($result);
				$_SESSION['user'] = $session = array('user' => $row['mail'], 'type_user' => $row['type_user'],'IMG' => $row['nombres']);
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

		public static function save_user($name, $email, $pass, $phone, $type_user, $gender, $nombre)
		{

			$nombrer = strtolower($nombre);
			$cd=$_FILES['imagen']['tmp_name'];
			$ruta = "../IMG/" . $_FILES['imagen']['name'];
			$destino = "../IMG/".$nombrer;
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

			if (!empty($resultado)){

               	//mysql_query($conexion,"INSERT INTO users VALUES ('". $nombre."','" . $destino . "')"); 
                //echo "el archivo ha sido movido exitosamente";
                mysql_query("INSERT INTO users VALUES('','$name','$email','$pass','$type_user','$gender','$phone','$nombre')");

            }else{

                echo "Error al subir el archivo";

                }
			}

		public static function save_costumer($name, $last_name, $mail, $phone, $origin_place)
		{
			mysql_query("INSERT INTO costumers VALUES('','$name','$last_name','$phone','$mail','$origin_place','','')");
			//$resultUsers = mysql_query("SELECT * FROM users"); 
		}
		
	}
?>