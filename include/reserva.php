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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(../images/fondo.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Información del pedido!</h1>	
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
						<td>Nombre local</td>
						<td>Plato</td>
						<td>Fecha Pedido</td>
						<td>Hora Entrega</td>
						<td>Dirección</td>
						<td>Teléfono</td>
						<td>Observación</td>
						<td>Estado</td>
						<td>EDITAR</td>
						<td>ELIMINAR</td>
						<!--<td>DETALLE</td>-->
					</tr>
				<?php 
				include('../config/conexion.php');
				
				//$consulta="SELECT * FROM pedidos pe, platos pl WHERE pe.ID_USUARIO='".$_SESSION['id']."' AND pe.ID_PLATO=pl.ID_PLATO";
				//$consulta="SELECT * FROM pedidos pe, platos pl WHERE pe.ID_USUARIO='".$_SESSION['id']."' AND pe.ID_PLATO=pl.ID_PLATO";

				$consulta="SELECT loc.NOMBRE_LOCAL, pl.NOMBRE_PLATO, pe.ID_PLATO, pe.ID_USUARIO, pe.FECHA_PEDIDO, pe.HORA_ENTREGA, pe.DIRECCION,pe.TELEFONO, pe.OBSERVACION, pe.ESTADO FROM pedidos pe, platos pl, locales loc WHERE pe.ID_USUARIO='".$_SESSION['id']."' AND pe.ID_PLATO = pl.ID_PLATO AND loc.ID_LOCAL = pe.ID_LOCAL";
				$ejecutar = mysql_query($consulta,$conexion);

				$i=0;

				//error_reporting(0);
				while ($fila = mysql_fetch_array($ejecutar)) {
					$nombreLocal = $fila['NOMBRE_LOCAL'];
					$nombrePlato = $fila['NOMBRE_PLATO'];
					$plato = $fila['ID_PLATO'];
					$cedula = $fila['ID_USUARIO'];
					$fecha_pedido = $fila['FECHA_PEDIDO'];
					$hora_entrega = $fila['HORA_ENTREGA'];
					$direccion = $fila['DIRECCION'];
					$telefono = $fila['TELEFONO'];
					$observacion = $fila['OBSERVACION'];
					$estado = $fila['ESTADO'];
					$i++;

				?>

				<tr>
					<td><?php echo $nombreLocal; ?></td>
					<td><?php echo $nombrePlato; ?></td>
					<td><?php echo $fecha_pedido; ?></td>
					<td><?php echo $hora_entrega; ?></td>
					<td><?php echo $direccion; ?></td>
					<td><?php echo $telefono; ?></td>
					<td><?php echo $observacion; ?></td>
					<td><?php echo $estado; ?></td>
					<td><a href="editar_reserva.php?editar=<?php echo $plato; ?>">EDITAR</a></td>
					<td><a href="eliminar_reserva.php?ID_PLATO=<?php echo $plato; ?>">ELIMINAR</a></td>
					<!--<td><a href="include/detalle_reserva.php">DETALLE</a></td>-->
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

