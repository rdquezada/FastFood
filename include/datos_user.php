<!DOCTYPE HTML>
<html>
	<?php
		include("../static/head2.php");
	?>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	<?php 
        include("../static/menu_usuario.php");
    ?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(../images/informacion.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Información Personal!</h1>	
						</div>
					</div>		
				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12 animate-box">
					<h3>DETALLE</h3>

					<table class="table table-hover">
					<tr>
						<td>Cédula</td>
						<td>Nombres</td>
						<td>Email</td>
						<td>Teléfono</td>
						<td>Dirección</td>
						<td>Contraseña</td>
						<td>EDITAR</td>
						<!--<td>DETALLE</td>-->
					</tr>
				<?php 
				include('../config/conexion.php');
				
				//$consulta="SELECT * FROM pedidos pe, platos pl WHERE pe.ID_USUARIO='".$_SESSION['id']."' AND pe.ID_PLATO=pl.ID_PLATO";
				//$consulta="SELECT * FROM pedidos pe, platos pl WHERE pe.ID_USUARIO='".$_SESSION['id']."' AND pe.ID_PLATO=pl.ID_PLATO";

				$consulta="SELECT * FROM usuarios WHERE ID_USUARIO='".$_SESSION['id']."'";
				$ejecutar = mysql_query($consulta,$conexion);

				$i=0;

				//error_reporting(0);
				while ($fila = mysql_fetch_array($ejecutar)) {
					$cedula = $fila['ID_USUARIO'];
					$nombre = $fila['NOMBRES'];
					$email = $fila['EMAIL'];
					$telefono = $fila['TELEFONO'];
					$direccion = $fila['DIRECCION'];
					$contrasenia = $fila['CONTRASENIA'];
					$i++;

				?>

				<tr>
					<td><?php echo $cedula; ?></td>
					<td><?php echo $nombre; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $telefono; ?></td>
					<td><?php echo $direccion; ?></td>
					<td><?php echo $contrasenia; ?></td>
					<td><a href="editar_usuario.php?editar=<?php echo $cedula; ?>">EDITAR</a></td>
				</tr>
				
				<?php } ?>

				</table>
						
					</div>
				
				</div>

			</div>

		</div>

	</div>


	<?php 
        include("../static/footer.php");
    ?>

    </div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php
		include("../static/jquery2.php");
	?>

	</body>
</html>

