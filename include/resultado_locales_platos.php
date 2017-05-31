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
						<?php $cedula = $_SESSION['id']; ?>
						<table class="table table-hover">
							<tr>
								<td><b>Nombre</b></td>
								<td><b>Detalle</b></td>
								<td><b>Precio</b></td>
								<td><b>Tiempo</b></td>
								<td><b>Imagen</b></td>
								<td><b>Agregar</b></td>
							</tr>
							<?php 
							error_reporting(0);
							$id_local=$_POST['ID_LOCAL'];
							include("../config/conexion.php");
							$consulta="SELECT pl.ID_PLATO, pl.NOMBRE_PLATO, pl.DETALLE, pl.PRECIO, pl.TIEMPO_PREPARACION, pl.IMAGEN FROM locales l, platos pl, preparacion p WHERE l.ID_LOCAL = '$id_local' AND p.ID_LOCAL = l.ID_LOCAL AND pl.ID_PLATO = p.ID_PLATO AND p.ID_PLATO = pl.ID_PLATO";
							$ejecutar = mysql_query($consulta,$conexion);
							$i=0;
							while ($fila = mysql_fetch_array($ejecutar)) {
								$id_local = $fila['ID_LOCAL'];
								$id_plato = $fila['ID_PLATO'];
								$nombre = $fila['NOMBRE_PLATO'];
								$detalle = $fila['DETALLE'];
								$precio= $fila['PRECIO'];
								$tiempo = $fila['TIEMPO_PREPARACION'];
								$imagen = $fila['IMAGEN'];
								$i++;
							?>
							<tr>
								<td><?php echo $nombre; ?></td>
								<td><?php echo $detalle; ?></td>
								<td><?php echo '$'.$precio; ?></td>
								<td><?php echo $tiempo; ?></td>
								<td><img src="../images/<?php echo $imagen; ?>" alt="Image" style="width: 10em;"></td>
								<td><a href="guardar_pedido2.php?editar1=<?php echo $id_plato;?>
								&editar2=<?php echo $cedula;?>
								&editar3=<?php echo $id_local=$_POST['ID_LOCAL'];?>">AGREGAR</a></td>
							</tr>
							<?php } ?>
						</table>
						<br>
					 	<br><br>
					 	<br>
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