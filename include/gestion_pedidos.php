<!DOCTYPE HTML>
<html>
	<?php 
		include("../static/head2.php");
	?>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	
	<?php 
		include("../static/menu_administrador.php");
	?> 
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(../images/fondo.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Adminitración de Pedidos!</h1>	
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
						<td>Cliente</td>
						<td>Cédula</td>
						<td>Plato</td>
						<td>Fecha Pedido</td>
						<td>Hora Entrega</td>
						<td>Dirección</td>
						<td>Teléfono</td>
						<td>Observación</td>
						<td>Estado</td>
						<td>EDITAR</td>
					</tr>
				<?php 
				include('../config/conexion.php');
				//$consulta="SELECT pl.NOMBRE_PLATO, po.NOMBRE_PORCION, u.NOMBRES, pe.ID_USUARIO, pe.FECHA_PEDIDO, pe.HORA_ENTREGA, pe.DIRECCION, pe.TELEFONO, pe.OBSERVACION, pe.ESTADO FROM platos pl, porciones po, pedidos pe, usuarios u WHERE pe.ID_USUARIO = u.ID_USUARIO AND pe.ID_PLATO=pl.ID_PLATO AND pe.ID_PORCION=po.ID_PORCION";

				$consulta="SELECT u.NOMBRES, u.ID_USUARIO, pl.NOMBRE_PLATO, pe.ID_PLATO, pe.FECHA_PEDIDO, pe.HORA_ENTREGA, pe.DIRECCION,pe.TELEFONO, pe.OBSERVACION, pe.ESTADO  FROM pedidos pe, platos pl, usuarios u, locales loc WHERE pe.ID_USUARIO = u.ID_USUARIO AND pe.ID_PLATO=pl.ID_PLATO AND loc.ID_LOCAL = pe.ID_LOCAL";
				$ejecutar = mysql_query($consulta,$conexion);

				$i=0;

				//error_reporting(0);
				while ($fila = mysql_fetch_array($ejecutar)) {
					$nombreUsuario = $fila['NOMBRES'];
					$id_usuario = $fila['ID_USUARIO'];
					$nombrePlato = $fila['NOMBRE_PLATO'];
					//$nombrePorcion = $fila['NOMBRE_PORCION'];
					$id_plato = $fila['ID_PLATO'];
					//$id_porcion = $fila['ID_PORCION'];
					$fecha = $fila['FECHA_PEDIDO'];
					$hora = $fila['HORA_ENTREGA'];
					$direccion = $fila['DIRECCION'];
					$telefono = $fila['TELEFONO'];
					$observacion = $fila['OBSERVACION'];
					$estado = $fila['ESTADO'];
					
					$i++;
				?>
				<tr>
					<td><?php echo $nombreUsuario; ?></td>
					<td><?php echo $id_usuario; ?></td>
					<td><?php echo $nombrePlato; ?></td>
					<td><?php echo $fecha; ?></td>
					<td><?php echo $hora; ?></td>
					<td><?php echo $direccion; ?></td>
					<td><?php echo $telefono; ?></td>
					<td><?php echo $observacion; ?></td>
					<td><?php echo $estado; ?></td>
					<td><a href="editar_pedido.php?editar=<?php echo $id_plato;?>&editar2=<?php echo $id_usuario;?>">EDITAR</a></td>
				</tr>
				
				<?php } ?>

				</table>
						
					</div>
				
				</div>

			</div>

		</div>

	</div>
	
	</div>
	
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php
		include("../static/jquery2.php");
	?>

	</body>
</html>