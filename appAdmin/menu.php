<?php 
	
	$session_user = isset($_SESSION['user']);

	if ($session_user){?>
	<nav class="contentMenu">
			<span class="toggleMenu">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</span>	
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
	 			Usuarios
	 		</a>
	 	</li>
			<li>
			<a href="logout.php">
				<i class="fa fa-sign-out iconListMenu" aria-hidden="true"></i>
				Salir
			</a>
		</li>
	</ul>
	</nav>
<?php } ?>