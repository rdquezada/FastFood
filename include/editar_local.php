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
							<h1 class="cursive-font">Adminitración de Locales!</h1>	
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
													$editar_local = $_GET['editar'];
													$consulta = "select * from locales where ID_LOCAL= '$editar_local'";
													$ejecutar = mysql_query($consulta, $conexion);
													$fila = mysql_fetch_array($ejecutar);
													$id = $fila['ID_LOCAL'];
													$nombre = $fila['NOMBRE_LOCAL'];
													$direccion = $fila['DIRECCION'];
													$horario = $fila['HORARIO'];
													$telefono = $fila['TELEFONO'];
													$latitud = $fila['LATITUD'];
													$longitud = $fila['LONGITUD'];
												}
											?>
											<form method="POST" action="">

												
													<div class="form-group">
														<label for="direccion">Dirección:</label>
														<input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion" value="<?php echo $direccion; ?>">
													</div>
													<div class="form-group">
														<label for="horario">Horario:</label>
														<input type="text" name="horario" class="form-control" id="horario" placeholder="Horario" value="<?php echo $horario; ?>">
													</div>
													<div class="form-group">
														<label for="telefono">Teléfono:</label>
														<input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono" value="<?php echo $telefono; ?>">
													</div>
													<div class="form-group">
														<label for="latitud">Latitud:</label>
														<input type="text" name="latitud" class="form-control" id="latitud" placeholder="Latitud" value="<?php echo $latitud; ?>">
													</div>
													<div class="form-group">
														<label for="longitud">Longitud:</label>
														<input type="text" name="longitud" class="form-control" id="longitud" placeholder="Longitud" value="<?php echo $longitud; ?>">
													</div>
													<div class="form-group">
														<input type="submit" name="actualizar" class="btn btn-primary btn-block" value="ACTUALIZAR LOCAL">
													</div>
											</form>
											<?php
												if(isset($_POST['actualizar'])){

												$actualizar_id = $_POST['id'];
												$actualizar_nombre = $_POST['nombre'];
												$actualizar_direccion = $_POST['direccion'];
												$actualizar_horario = $_POST['horario'];
												$actualizar_telefono = $_POST['telefono'];
												$actualizar_latitud = $_POST['latitud'];
												$actualizar_longitud = $_POST['longitud'];
														

												$actualizar = "update locales set DIRECCION='$actualizar_direccion', HORARIO='$actualizar_horario', TELEFONO='$actualizar_telefono', LATITUD='$actualizar_latitud', LONGITUD='$actualizar_longitud' where ID_LOCAL= '$editar_local'";

												$ejecutar = mysql_query($actualizar, $conexion);

												if ($ejecutar) {
																			//echo "DATOS ACTUALIZADOS";
													echo '<script>alert("DATOS ACTUALIZADOS CORRECTAMENTE")</script> ';
													echo "<script>location.href='gestion_locales.php'</script>";
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

