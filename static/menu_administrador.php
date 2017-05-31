<nav class="gtco-nav" role="navigation">
	<div class="gtco-container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div id="gtco-logo"><a href="menu_admin.php">FastFood <em>.</em></a></div>
			</div>
			<div class="col-xs-8 text-right menu-1">
				<ul>
					<?php 
						session_start();
						if (isset($_SESSION['correo'])) {
							echo "<a href=''>Bienvenido: ".$_SESSION['nombres']."</a>";
					?>
					<br><br>
					<!--<?php
						/*echo "<li><a href='menu.php'>Menu</a></li>";
						echo "<li><a href='reserva.php'>Servicio a Domicilio</a></li>";
						echo "<li><a href='services.php'>Servicios</a></li>";
						echo "<li><a href='contact.php'>Contactos</a></li>";*/
					?>-->
					<?php
						echo "<li><a href='gestion_pedidos.php'>Gest. Pedidos</a></li>";
						echo "<li><a href='gestion_locales.php'>Gest. Locales</a></li>";
						echo "<li><a href='gestion_platos.php'>Gest. Platos</a></li>";
						//echo "<li><a href='gestion_porciones.php'>Gest. Porciones</a></li>";
						//echo "<li><a href='gestion_reservas.php'>Gest. Reservas</a></li>";
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