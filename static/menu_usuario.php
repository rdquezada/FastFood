<nav class="gtco-nav" role="navigation">
	<div class="gtco-container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div id="gtco-logo"><a href="menu_user.php">FastFood <em>.</em></a></div>
			</div>
			<div class="col-xs-8 text-right menu-1">
				<ul>
					<?php 
						session_start();
						if (isset($_SESSION['correo'])) {
							echo "<a href=''>Bienvenido: ".$_SESSION['nombres']."</a>";
					?>
					<br><br>
					<?php
						echo "<li><a href='datos_user.php'>Mis Datos</a></li>";
						echo "<li><a href='menu_user.php'>Locales</a></li>";
						echo "<li><a href='reserva.php'>Mis Pedidos</a></li>";
						echo "<li><a href='services2.php'>Servicios</a></li>";
						echo "<li><a href='contact2.php'>Contactos</a></li>";
						echo "<li><a href='cerrar_sesion.php'>Cerrar Sesión</a></li>";
					}else{
						header("Location: ../index.php");
					}
					?>
				</ul>	
			</div>
		</div>
	</div>
</nav>