<?php 
	session_start();
	$session_user = isset($_SESSION['user']);
	if ($session_user){	
		echo "session setada";
		include 'header.php';
		
		if ($_GET) {
			$typeTemplate = $_GET['template'];
			switch ($typeTemplate) {
				case '1':
					include 'TEMPLATES/posts.php';
					break;
				case '2':
					include 'TEMPLATES/bedrooms.php';
					break;
				case '6':
					include 'TEMPLATES/costumer.php';
					break;
				case '7':
					include 'TEMPLATES/users.php';
					break;
				case '8':
					include 'TEMPLATES/quotation.php';
					break;
				
				default:
					include 'TEMPLATES/bodega.php';
					break;
			}
		}else{
			include 'posts.php';
		}
		
	}else{
		header("location: index.php");
	}
	include 'footer.php';
 ?>