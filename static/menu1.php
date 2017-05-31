<nav class="gtco-nav" role="navigation">
	<div class="gtco-container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div id="gtco-logo"><a href="index.php">FastFood <em>.</em></a></div>
			</div>
			<div class="col-xs-8 text-right menu-1">
				<ul>
					<?php 
						session_start();
						if (isset($_SESSION['correo'])) {
							echo "<a href=''>Bienvenido: ".$_SESSION['nombres']."</a>";
							echo "<li><a href='include/cerrar_sesion.php'>Cerrar Sesión</a></li>";
					}else{
						echo '<li><a href="index.php">Iniciar Sesión</a></li>';
					}
					?>
					<li><a href="services.php">Servicios</a></li>
					<li><a href="contact.php">Contactos</a></li>
				</ul>	
			</div>
		</div>
	</div>
</nav>