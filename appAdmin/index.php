<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login </title>
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="CSS/ICONS/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
</head>
<style>	
	.panelLogin{
		width: 100%;
		max-width: 400px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translateX(-50%)  translateY(-50%);
		background: red;
	}
	.headerPanel{
		display: block;
		background: #b01c2e;
		color: #fff;
		text-align: center;
		padding: 30px;
	}
	.iconUser{
		width: 40px;
		height: 40px;
		background: rgba(0,0,0,.2);
		text-align: center;
		padding-top: 10px;
		box-sizing: border-box;
		border-radius: 10px;
		font-size: 18px;
		margin-bottom: 5px;
	}
	.formPanel{
		display: block;
		height: 300px;
		background: #fff;
		position: relative;
		padding: 15px 40px;		
		box-sizing: border-box;
	}

	.formPanel::after{
		content: "";
		position: absolute;
		z-index: 10;
		top: -12px;
		left: 50%;
		transform: translateX(-50%);
		border-left: 15px solid transparent;
		border-right: 15px solid transparent;
		border-bottom: 15px solid #fff;
	}
	.inputStyle{
		background: #edf1f4;
		border-radius: 3px;
		border: none;
		padding: 10px;
		display: block;
		margin-top: 20px;
		width: 100%;
		box-sizing: border-box;

	}
	body{
		background: #ccc;
	}
	input.button{
		display: block;
		padding: 12px 10px;
		border-radius: 4px;
		background: #b01c2e;
		border: none;
		display: block;
		width: 100%;
		margin-top: 20px;
		color: #fff;
		cursor: pointer;

	}
	.erromsg{
		font-size: 12px;
		color: #b01c2e;
		text-align: center;
		padding: 5px;
		font-weight: 600;
		display: block;
	}
	.hidden{
		display: none;
	}
</style>
<body>	
	
	<div class="panelLogin">	
		<div class="headerPanel">
			<i class="fa fa-user iconUser" aria-hidden="true"></i>
			<h2>LOGIN PANEL ADMIN</h2>
		</div>
		<div class="formPanel">	
			<form autocomplete="off" method="post" onsubmit="login_validate();" id="formLogin">
				<input type="mail" name="email" class="inputStyle" placeholder="Nombre de usuario">
				<input type="password" name="pass" class="inputStyle" placeholder="Contraseña">
				<p class="erromsg hidden">usuario / contraseña incorrectos </p>
				<input type="hidden" name="type_form" value="validate_user">
				<input type="submit" value="Entrar" class="button">
			</form>
			
		</div>
	</div>
	<script src="JS/jquery-3.2.1.min.js"></script>
	<script src="JS/action.js"></script>
	<script src="JS/ajax.js"></script>
</body>
</html>