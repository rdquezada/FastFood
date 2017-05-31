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

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(../images/fondo_2.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Servicio de comida rápida!</h1>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">						
									<form  action="resultado_locales.php" method="POST">
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
										<button class="btn btn-default" type="submit">INFORMACION</button>	
									</form>	
								</div>
							</div>	
						</div>
					</div>					
				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">INFORMACIÓN DETALLADA</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12 animate-box">
						<h3>DETALLE</h3>
						<table class="table table-hover">
							<tr>
								<td><b>Nombre</td>
								<td><b>Dirección</td>
								<td><b>Horario</td>
								<td><b>Teléfono</td>
							</tr>
							<?php 
							error_reporting(0);
							$id_local=$_POST['ID_LOCAL'];	
							include("../config/conexion.php");
							$consulta="SELECT * FROM `locales` WHERE ID_LOCAL ='$id_local'";
							$ejecutar = mysql_query($consulta,$conexion);
							$i=0;
							while ($fila = mysql_fetch_array($ejecutar)) {
								$plato = $fila['ID_LOCAL'];
								$nombre= $fila['NOMBRE_LOCAL'];
								$direccion= $fila['DIRECCION'];
								$horario = $fila['HORARIO'];
								$telefono = $fila['TELEFONO'];
								$longitud = $fila['LONGITUD'];
								$latitud = $fila['LATITUD'];
								$i++;
							?>
							<tr>
								<td><?php echo $nombre; ?></td>
								<td><?php echo $direccion; ?></td>
								<td><?php echo $horario; ?></td>
								<td><?php echo $telefono; ?></td>
							</tr>
							<?php } ?>
						</table>
						<body  onload="mostrarGoogleMaps()" >
				 		<div id="mostrarMapa" style="width: 1030px; height: 250px;"> </div>
				 		<br>
				 		<br>
				 		<form  action="resultado_locales_platos.php" method="POST">
							<select name="ID_LOCAL" id="id_local" class="btn btn-default" >
								<option value="<?php echo $plato?>"> <?php echo htmlentities($nombre);?>
								</option>	
							</select> 
							<button class="btn btn-default" type="submit">VISITAR</button>	
						</form>	
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
	
	<script type="text/javascript">// <![CDATA[
			 function mostrarGoogleMaps() {
			   //Creamos el punto a partir de las coordenadas:
			   var punto = new google.maps.LatLng(<?php echo $longitud; ?>, <?php echo $latitud; ?>);
		 //Configuramos las opciones indicando Zoom, punto(el que hemos creado) y tipo de mapa
			   var myOptions = {
			       zoom: 18, center: punto, mapTypeId: google.maps.MapTypeId.ROADMAP
			   };
			   //Creamos el mapa e indicamos en qué caja queremos que se muestre
			   var map = new google.maps.Map(document.getElementById("mostrarMapa"),  myOptions);
		//Opcionalmente podemos mostrar el marcador en el punto que hemos creado.
			   var marker = new google.maps.Marker({
			       position:punto,
			       map: map,
			       title:"Ubicación"});
	}
	</script>

	</body>
</html>