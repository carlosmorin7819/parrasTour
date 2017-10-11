<?php 
	
	$session_user = isset($_SESSION['user']);

	if ($session_user){?>
	<ul id="menu">	
		<li>
			<a href="panel.php">
				<img src="IMG/logo.png" alt="" height="80">	
				<p class="cWhite text-center padd5">
					<img src="IMG/<?php echo $_SESSION['user']['IMG']; ?>" alt="HOLA" width="80">
					<?php echo $_SESSION['user']['user']; ?>
					
				</p>
			</a>
			
			
		</li>

		<li>
			<a href="panel.php?template=1" class="<?php if($_GET['template'] == 1){ echo 'hover'; }?>">
				<!-- iconListMenu -->
				<i class="fa fa-address-book-o iconListMenu" aria-hidden="true"></i>
	 			Publicaciones
	 		</a>
	 	</li>
		<li>
			<a href="panel.php?template=2" class="display <?php if($_GET['template'] == 2){ echo 'hover'; }?>">
				<i class="fa fa-bed iconListMenu" aria-hidden="true"></i>
				Habitaciones
			</a>
		</li>
		<li>
			<a href="panel.php?template=3" class="<?php if($_GET['template'] == 3){ echo 'hover'; }?>">
				<i class="fa fa-glass iconListMenu" aria-hidden="true"></i>
				Bodega
			</a>
		</li>
		<li>
			<a href="panel.php?template=4" class="<?php if($_GET['template'] == 4){ echo 'hover'; }?>">
				<i class="fa fa-users iconListMenu" aria-hidden="true"></i>
				Salon de eventos
			</a>
		</li>
		<li>
			<a href="panel.php?template=5" class="<?php if($_GET['template'] == 5){ echo 'hover'; }?>">
				<i class="fa fa-cutlery iconListMenu" aria-hidden="true"></i>
				Restaurant
			</a>
		</li>
		<li>
			<a href="panel.php?template=6" class="<?php if($_GET['template'] == 6){ echo 'hover'; }?>">
				<i class="fa fa-user iconListMenu" aria-hidden="true"></i>
				Clientes
			</a>
		</li>
		<li>
			<a href="panel.php?template=7" class="<?php if($_GET['template'] == 7){ echo 'hover'; }?>">
				<i class="fa fa-user iconListMenu" aria-hidden="true"></i>
				Usuarios
			</a>
		</li>
		<li>
			<a href="panel.php?template=8" class="<?php if($_GET['template'] == 8){ echo 'hover'; }?>">
				<i class="fa fa-file-text-o iconListMenu" aria-hidden="true"></i>
				Cotizaciones
			</a>
		</li>
		<li>
			<a href="logout.php">
				<i class="fa fa-sign-out iconListMenu" aria-hidden="true"></i>
				Salir
			</a>
		</li>
	</ul>
<?php } ?>