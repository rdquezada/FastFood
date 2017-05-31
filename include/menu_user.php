<!DOCTYPE HTML>
<html lang="es">
	<?php
		include("../static/head2.php");
	?>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	<?php 
	include("../static/menu_usuario.php");
	?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(../images/fondo_2.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 style="text-align: center;" class="cursive-font">Servicio de Comida Rápida!</h1>
							<br><br>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">						
									<?php 
										include('../config/conexion.php');
										$consulta="SELECT NOMBRE_PLATO FROM LOCALES, PLATOS, PEDIDOS WHERE NOMBRE_PLATO  LIKE '%%';"; 
										$ejecutar = mysql_query($consulta,$conexion);
									?>          
									<form  style="text-align: center;" action="resultado_busqueda.php" method="GET">
										<input type="text" class="btn btn-default" name="busquedaPlato" placeholder="Buscar platos">
											<button class="btn btn-default"  type="submit">BUSCAR</button>	
									</form>		
								</div>
							</div>	
							<br>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">						
									<form  style="text-align: center;" action="resultado_locales.php" method="POST">
										<select name="ID_LOCAL" id="id_local" class="btn btn-default" >
										<?php 
											include("../config/conexion.php");
											$consulta="SELECT ID_LOCAL, NOMBRE_LOCAL FROM locales";
											$ejecutar = mysql_query($consulta,$conexion);
											echo "<option>Seleccione un Local</option>";
											while ($fila = mysql_fetch_array($ejecutar)) {
												echo "<option value=".$fila['ID_LOCAL'].">".$fila['NOMBRE_LOCAL']."</option>";
											} 
										?>
										</select> 
										<button class="btn btn-default" type="submit">INFORMACIÓN</button>	
									</form>	
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

