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
							<h1 class="cursive-font">Sevicio a Domicilio!</h1>	
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
												$editar_reserva = $_GET['editar'];
												$consulta = "select * from pedidos where ID_PLATO= '$editar_reserva'";

												$ejecutar = mysql_query($consulta, $conexion);
												
												$fila = mysql_fetch_array($ejecutar);
													//$plato = $fila['ID_PLATO'];
													//$cedula = $fila['ID_USUARIO'];
													//$pedido = $fila['ID_PORCION'];
													//$fecha_pedido = $fila['FECHA_PEDIDO'];
													$hora = $fila['HORA_ENTREGA'];
													$direccion = $fila['DIRECCION'];
													$telefono = $fila['TELEFONO'];
													$observacion = $fila['OBSERVACION'];
													//$estado = $fila['ESTADO'];
											}
											?>
											<form method="POST" action="">
												<div class="row form-group">
												</div>
												<div class="form-group">
														<label for="hora">Hora de Entrega:</label>
														<input type="time" name="hora" class="form-control" id="hora" value="<?php echo $hora; ?>">
													</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="direccion">Direccion:</label>
														<input type="text" name="direccion" class="form-control" value="<?php echo $direccion; ?>">
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
														<label for="observacion">Observación:</label>
														<input type="text" name="observacion" class="form-control" value="<?php echo $observacion; ?>">
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

											$actualizar_hora = $_POST['hora'];
											$actualizar_direccion = $_POST['direccion'];
											$actualizar_telefono = $_POST['telefono'];
											$actualizar_observacion = $_POST['observacion'];

											$actualizar = "update pedidos set HORA_ENTREGA='$actualizar_hora', DIRECCION='$actualizar_direccion', TELEFONO='$actualizar_telefono', OBSERVACION='$actualizar_observacion' where ID_PLATO= '$editar_reserva' and ID_USUARIO='".$_SESSION['id']."'";

											$ejecutar = mysql_query($actualizar, $conexion);

											if ($ejecutar) {
												//echo "DATOS ACTUALIZADOS";
												echo '<script>alert("DATOS ACTUALIZADOS CORRECTAMENTE")</script> ';
												echo "<script>location.href='reserva.php'</script>";
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

