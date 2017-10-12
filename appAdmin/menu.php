<?php 
	
	$session_user = isset($_SESSION['user']);

	if ($session_user){?>
	<ul id="menu">	
		<li class="cWhite">
		
				<div class="row">
					<div class="col-lg-4 ">
						<div class="imgProfile" style=" background-image: url(IMG/<?php echo $_SESSION['user']['IMG']; ?>);"></div>
					</div>
					<div class="col-lg-8 noMargin noPadding">
						<div class="h80 block">
							<div class="content middle">
								<div class="pointG "></div>
								<span class="text-600 showInfo cursorPointer">
									Disponible 
									<i class="fa fa-caret-down" aria-hidden="true"></i>
								</span>
								<div class="infoUser">
									<span class="cWhite text-left padd5 capitalize s12	">
										<?php echo $_SESSION['user']['user']; ?>
									</span><br>
									<span class="s12">
										<?php echo $_SESSION['user']['name']; ?>
									</span>
								</div>
								<p>							
									
								</p>
							</div>
							
						</div>
					</div>
				</div>
				
			
			
			
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