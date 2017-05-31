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
							<h1 class="cursive-font">Adminitración de Platos!</h1>	
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
						<td>Plato</td>
						<td>Detalle</td>
						<td>Precio</td>
						<td>Tiempo Preparación</td>
						<td>Imagen</td>
						<td>EDITAR</td>
						<td>ELIMINAR</td>
					</tr>
				<?php 
				include('../config/conexion.php');
				$consulta="SELECT * FROM platos";
				$ejecutar = mysql_query($consulta,$conexion);

				$i=0;

				//error_reporting(0);
				while ($fila = mysql_fetch_array($ejecutar)) {
					$id = $fila['ID_PLATO'];
					$nombre = $fila['NOMBRE_PLATO'];
					$detalle = $fila['DETALLE'];
					$precio = $fila['PRECIO'];
					$tiempo = $fila['TIEMPO_PREPARACION'];
					$imagen = $fila['IMAGEN'];
					$i++;
				?>

				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $nombre; ?></td>
					<td><?php echo $detalle; ?></td>
					<td><?php echo '$'.$precio; ?></td>
					<td><?php echo $tiempo; ?></td>
					<!--<td><?php //echo $imagen; ?></td>-->
					<td><img src="../images/<?php echo $imagen; ?>" alt="Image" style="width: 10em;"></td>
					<td><a href="editar_plato.php?editar=<?php echo $id; ?>">EDITAR</a></td>
					<td><a href="eliminar_plato.php?ID_PLATO=<?php echo $id; ?>">ELIMINAR</a></td>
				</tr>
				
				<?php } ?>

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
				<form action="guardar_plato.php" class="form-inline" method="post">
										<div class="col-md-12 col-sm-12">
											<div class="form-group">
												<label for="nombre" class="sr-only">Nombre:</label>
												<input type="text" REQUIRED class="form-control" id="nombre" name="nombre" placeholder="Nombre del Plato">
											</div>
											<div class="form-group">
												<label for="detalle" class="sr-only">Detalle:</label>
												<input type="text" REQUIRED class="form-control" id="detalle" name="detalle" placeholder="Detalle">
											</div>
											<div class="form-group">
												<label for="precio" class="sr-only">Precio:</label>
												<input type="text" REQUIRED class="form-control" id="precio" name="precio" placeholder="Precio">
											</div>
											<div class="form-group">
												<label for="tiempo" class="sr-only">Tiempo de preparacion:</label>
												<input type="text" REQUIRED class="form-control" id="tiempo" name="tiempo" placeholder="Tiempo de preparación">
											</div>
											<div class="form-group">
												<label for="imagen" class="sr-only">Imagen:</label>
												<input type="text" REQUIRED class="form-control" id="imagen" name="imagen" placeholder="Nombre y Formato de Imagen">
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-default btn-block">REGISTRAR PLATO</button>
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

