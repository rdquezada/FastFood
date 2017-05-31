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
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Información</h3>
											<?php 
											include('../config/conexion.php');
											if(isset($_GET['editar'])){
												$editar_usuario = $_GET['editar'];
												$consulta = "select * from usuarios where ID_USUARIO= '$editar_usuario'";

												$ejecutar = mysql_query($consulta, $conexion);
												
												$fila = mysql_fetch_array($ejecutar);
													$nombres = $fila['NOMBRES'];
													$email = $fila['EMAIL'];
													$telefono = $fila['TELEFONO'];
													$direccion = $fila['DIRECCION'];
													$contrasenia = $fila['CONTRASENIA'];
											}
											?>
											<form method="POST" action="">
												<div class="row form-group">
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="nombres">Nombres:</label>
														<input type="text" name="nombres" class="form-control" value="<?php echo $nombres; ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="email">Email:</label>
														<input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="telefono">Teléfono:</label>
														<input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?>" >
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="direccion">Dirección:</label>
														<input type="text" name="direccion" class="form-control" value="<?php echo $direccion; ?>">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="contrasenia">Contraseña:</label>
														<input type="text" name="contrasenia" class="form-control" value="<?php echo $contrasenia; ?>">
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="actualizar" class="btn btn-primary btn-block" value="ACTUALIZAR">
													</div>
												</div>
											</form>
											<?php
											if(isset($_POST['actualizar'])){

											$actualizar_nombres = $_POST['nombres'];
											$actualizar_email = $_POST['email'];
											$actualizar_telefono = $_POST['telefono'];
											$actualizar_direccion = $_POST['direccion'];
											$actualizar_contrasenia = $_POST['contrasenia'];

											$actualizar = "update usuarios set NOMBRES='$actualizar_nombres', EMAIL='$actualizar_email', TELEFONO='$actualizar_telefono', DIRECCION='$actualizar_direccion', CONTRASENIA='$actualizar_contrasenia' where ID_USUARIO= '$editar_usuario'";

											$ejecutar = mysql_query($actualizar, $conexion);

											if ($ejecutar) {
												//echo "DATOS ACTUALIZADOS";
												echo '<script>alert("DATOS ACTUALIZADOS CORRECTAMENTE")</script> ';
												echo "<script>location.href='datos_user.php'</script>";
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