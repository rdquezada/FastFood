<!DOCTYPE HTML>
<html>

	<?php
		include("../static/head2.php");
	?>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	
	<?php 
		include("../static/menu_administrador.php")
	?> 
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(../images/fondo.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Adminitración de Locales!</h1>	
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
						<td>Id</td>
						<td>Local</td>
						<td>Dirección</td>
						<td>Horario</td>
						<td>Teléfono</td>
						<td>Latitud</td>
						<td>Longitud</td>
						<td>EDITAR</td>
						<td>ELIMINAR</td>
					</tr>
				<?php 
				include('../config/conexion.php');
				$consulta="SELECT * FROM locales";
				$ejecutar = mysql_query($consulta,$conexion);

				$i=0;

				//error_reporting(0);
				while ($fila = mysql_fetch_array($ejecutar)) {
					$id = $fila['ID_LOCAL'];
					$nombre = $fila['NOMBRE_LOCAL'];
					$direccion = $fila['DIRECCION'];
					$horario = $fila['HORARIO'];
					$telefono = $fila['TELEFONO'];
					$latitud = $fila['LATITUD'];
					$longitud = $fila['LONGITUD'];
					$i++;
				?>

				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $nombre; ?></td>
					<td><?php echo $direccion; ?></td>
					<td><?php echo $horario; ?></td>
					<td><?php echo $telefono; ?></td>
					<td><?php echo $latitud; ?></td>
					<td><?php echo $longitud; ?></td>
					<td><a href="editar_local.php?editar=<?php echo $id; ?>">EDITAR</a></td>
					<td><a href="eliminar_local.php?ID_LOCAL=<?php echo $id; ?>">ELIMINAR</a></td>
				</tr>
				
				<?php } 

				?>

				</table>
						
					</div>
				
				</div>

			</div>

		</div>

	</div>

<div id="gtco-subscribe" >
	<div class="gtco-container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
				<h2 class="cursive-font">Registrar!</h2>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2">
				<form action="guardar_local.php" class="form-inline" method="post">
										<div class="col-md-12 col-sm-12">
											<div class="form-group">
												<label for="nombre" class="sr-only">Nombre:</label>
												<input type="text" REQUIRED class="form-control" id="nombre" name="nombre" placeholder="Nombre del Local">
											</div>
											<div class="form-group">
												<label for="direccion" class="sr-only">Direccion:</label>
												<input type="text" REQUIRED class="form-control" id="direccion" name="direccion" placeholder="Direccion">
											</div>
											<div class="form-group">
												<label for="horario" class="sr-only">Horario:</label>
												<input type="text" REQUIRED class="form-control" id="horario" name="horario" placeholder="Horario">
											</div>
											<div class="form-group">
												<label for="telefono" class="sr-only">Telefono:</label>
												<input type="text" REQUIRED class="form-control" id="telefono" name="telefono" placeholder="Telefono">
											</div>
											<div class="form-group">
												<label for="latitud" class="sr-only">Latitud:</label>
												<input type="text" REQUIRED class="form-control" id="latitud" name="latitud" placeholder="Latitud de Ubicación">
											</div>
											<div class="form-group">
												<label for="longitud" class="sr-only">Longitud:</label>
												<input type="text" REQUIRED class="form-control" id="longitud" name="longitud" placeholder="Longitud de Ubicación">
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-default btn-block">REGISTRAR LOCAL</button>
											</div>
										</div>
										
									</form>
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

