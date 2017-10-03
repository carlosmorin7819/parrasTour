
<div class="containerC">

	<br>

	
<div class="row">
	<div class="col-lg-11">
		<div class="block h50 ">
			<div class="content middle">
				<h1 class="title">Panel de usuarios</h1>
			</div>
		</div>
		
	</div>
	<div class="col-lg-1 ">
		<div class="block h50 ">
			<div class="content middle text-center">
				<button class="btn-green bgGreen btn" id="modalUser">
					<i class="fa fa-user-plus" aria-hidden="true"></i>


				</button>
			</div>
		</div>
		
	</div>
</div>

<div class="containerTable">	
	<table>	
		<thead>	
			<tr>	
				<th>ID</th>		
				<th>Nombre</th>		
				<th>Telefono</th>		
				<th>Email</th>		
				<th>Genero</th>		
				<th>Tipo de usuario</th>		
				<th>Editar</th>		
				<th>Delete</th>		
			</tr>
		</thead>
		<tbody>	
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
			<tr>	
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
				<th>
					hola
				</th>
			</tr>
		</tbody>
	</table>

</div>
<div class="bgModal hidden"></div>
<form action="" id="formUsers" method="post" class="hidden formUsers">
	<h3 class="titleModal">Formulario de registro</h3>

	<label for="name">Nombres *</label>
	<input type="text" name="name" placeholder="Nombres" id="name" class="inputStyle">

	<label for="name">Telefono *</label>
	<input type="number" name="phone" placeholder="555-555-55-55" id="phone" class="inputStyle">

	<label for="email">Correo *</label>
	<input type="email" name="email" placeholder="Correo" id="email" class="inputStyle">

	<label for="pass">Contraseña *</label>
	<input type="password" name="pass" placeholder="Correo" id="mail" class="inputStyle">

	<label for="gender">Genero *</label>
	<select name="gender" id="gender" class="inputStyle">
		<option value="1">Hombre</option>
		<option value="2">Mujer</option>
	</select>

	<label for="type_user">Tipo usuario *</label>
	<select name="type_user" id="type_user" class="inputStyle">
		<option value="1">Operador</option>
		<option value="2">Master</option>
	</select>
	<input type="hidden" name="type_form" value="save_user">
	<div class="clear"></div>
	<div class="row">
		
		<div class="col-lg-2 col-lg-offset-7">
			<button class=" bgOrange btn" id="modalUser">
					Salir
			</button>
		</div>
		<div class="col-lg-2">
			<button type="submit" class="btn-green bgGreen btn" id="saveUser" onclick="save_user();">
				Guardar Usaurio
			</button>
		</div>
	</div>
</form>
<div class="spinner hidden">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>