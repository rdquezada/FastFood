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
							<h1 class="cursive-font">Adminitración de Pedidos!</h1>	
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
													$editar_pedido = $_GET['editar'];
													$editar_pedido2 = $_GET['editar2'];
													$consulta = "select HORA_ENTREGA, OBSERVACION, ESTADO from pedidos where ID_PLATO= '$editar_pedido' AND ID_USUARIO = '$editar_pedido2'";

													$ejecutar = mysql_query($consulta, $conexion);
													$fila = mysql_fetch_array($ejecutar);
													//$id_plato = $fila['ID_PLATO'];
													//$id_usuario = $fila['ID_USUARIO'];
													//$id_porcion = $fila['ID_PORCION'];
													//$fecha = $fila['FECHA_PEDIDO'];
													$hora = $fila['HORA_ENTREGA'];
													//$direccion = $fila['DIRECCION'];
													//$telefono = $fila['TELEFONO'];
													$observacion = $fila['OBSERVACION'];
													$estado = $fila['ESTADO'];
												}
											?>
											<form method="POST" action="">
													<div class="form-group">
														<label for="hora">Hora de Entrega:</label>
														<input type="time" name="hora" class="form-control" id="hora" value="<?php echo $hora; ?>">
													</div>
													<div class="form-group">
														<label for="observacion">Observacion:</label>
														<input type="text" name="observacion" class="form-control" id="observacion" value="<?php echo $observacion; ?>">
													</div>
													<div class="form-group">
														<label for="estado">Estado:</label>
														<input type="text" name="estado" class="form-control" id="estado" value="<?php echo $estado; ?>">
													</div>
													<div class="form-group">
														<input type="submit" name="actualizar" class="btn btn-primary btn-block" value="ACTUALIZAR LOCAL">
													</div>
											</form>
											<?php
												if(isset($_POST['actualizar'])){
													$actualizar_id_plato = $_POST['id_plato'];
													$actualizar_id_usuario = $_POST['id_usuario'];
													$actualizar_id_porcion = $_POST['id_porcion'];
													$actualizar_fecha = $_POST['fecha'];
													$actualizar_hora = $_POST['hora'];
													$actualizar_direccion = $_POST['direccion'];
													$actualizar_telefono = $_POST['telefono'];
													$actualizar_observacion = $_POST['observacion'];
													$actualizar_estado = $_POST['estado'];
														

												$actualizar = "update pedidos set HORA_ENTREGA='$actualizar_hora', OBSERVACION='$actualizar_observacion', ESTADO='$actualizar_estado' where ID_PLATO= '$editar_pedido' AND ID_USUARIO='$editar_pedido2'";

												$ejecutar = mysql_query($actualizar, $conexion);

												if ($ejecutar) {
																			//echo "DATOS ACTUALIZADOS";
													echo '<script>alert("DATOS ACTUALIZADOS CORRECTAMENTE")</script> ';
													echo "<script>location.href='gestion_pedidos.php'</script>";
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

