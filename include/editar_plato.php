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
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Adminitración de Platos!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Información</h3>
											<?php 
											include('../config/conexion.php');
											if(isset($_GET['editar'])){
												$editar_plato = $_GET['editar'];
												$consulta = "select * from platos where ID_PLATO= '$editar_plato'";

												$ejecutar = mysql_query($consulta, $conexion);
												
												$fila = mysql_fetch_array($ejecutar);
													$id = $fila['ID_PLATO'];
													$nombre = $fila['NOMBRE_PLATO'];
													$detalle = $fila['DETALLE'];
													$precio = $fila['PRECIO'];
													$tiempo = $fila['TIEMPO_PREPARACION'];
													$imagen = $fila['IMAGEN'];
											}
											?>
											<form method="POST" action="">

												<div class="form-group">
													<label for="nombre">Nombre:</label>
													<input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $nombre; ?>">
												</div>
											<div class="form-group">
												<label for="detalle">Detalle:</label>
												<input type="text" name="detalle" class="form-control" id="detalle" value="<?php echo $detalle; ?>">
											</div>
											<div class="form-group">
												<label for="precio">Precio:</label>
												<input type="text" name="precio" class="form-control" id="precio" value="<?php echo $precio; ?>">
											</div>
											<div class="form-group">
												<label for="tiempo">Tiempo de preparacion:</label>
												<input type="text" name="tiempo" class="form-control" id="tiempo" value="<?php echo $tiempo; ?>">
											</div>
											<div class="form-group">
												<label for="imagen">Imagen:</label>
												<input type="text" name="imagen" class="form-control" id="imagen" value="<?php echo $imagen; ?>">
											</div>
											<div class="form-group">
												<input type="submit" name="actualizar" class="btn btn-primary btn-block" value="ACTUALIZAR PLATO">
											</div>
											</form>
											<?php
											if(isset($_POST['actualizar'])){

											$actualizar_id = $_POST['id'];
											$actualizar_nombre = $_POST['nombre'];
											$actualizar_detalle = $_POST['detalle'];
											$actualizar_precio = $_POST['precio'];
											$actualizar_tiempo = $_POST['tiempo'];
											$actualizar_imagen = $_POST['imagen'];
							

											$actualizar = "update platos set NOMBRE_PLATO='$actualizar_nombre', DETALLE='$actualizar_detalle', PRECIO='$actualizar_precio', TIEMPO_PREPARACION='$actualizar_tiempo', IMAGEN='$actualizar_imagen' where ID_PLATO= '$editar_plato'";

											$ejecutar = mysql_query($actualizar, $conexion);

											if ($ejecutar) {
												//echo "DATOS ACTUALIZADOS";
												echo '<script>alert("DATOS ACTUALIZADOS CORRECTAMENTE")</script> ';
												echo "<script>location.href='gestion_platos.php'</script>";
											}else{
												echo "Error ".mysql_error();
											}
										}
										?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</header>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php
		include("../static/jquery2.php");
	?>

	</body>
</html>

