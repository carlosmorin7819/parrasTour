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
				$_SESSION['user'] = $session = array('name' => $row['name'],'user' => $row['email'], 'type_user' => $row['type_user'],'IMG' => $row['nombre']);
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
                mysql_query("INSERT INTO users VALUES('','$name','$phone','$email','$type_user','$pass','$nombre','$gender')");

                /**ARMAR TABLA PARA MOSTRAR POR AJAX**/
                $query_users = mysql_query("SELECT * FROM users");

	$table = '<table width="100%" border="0" id="tableUsers">';
	$table .= '<thead>	
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Mail</td>
						<td>Tipo Usario</td>
						<td>Genero</td>
						<td>Telefono</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
				</thead>';
	$table .= '<tbody>';
			while($elemento = mysql_fetch_array($query_users)){ 
				$table .= '<tr>
				<th>'.$elemento['id'].'</th>
				<th>'.$elemento['name'].'</th>
				<th>'.$elemento['email'].'</th>
				<th>'.$elemento['type_user'].'</th>
				<th>'.$elemento['gender'].'</th>
				<th>'.$elemento['phone'].'</th>
			
				<th>
					<a href="" class="buttonAdd">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
				</th>
				
					<th>
						<a href="CLASS/deleteUser.php?id='.$elemento['id'].'" class="buttonDelete delete"  onclick="deleteUser(this);">
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</a>
						
					</th>
			

							</tr>';
				}
				$table .= '</tbody></table>';




				echo $table;

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