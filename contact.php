<!DOCTYPE HTML>
<html>
	<?php 
		include("static/head.php");
	?>

	<body>
	<div class="gtco-loader"></div>
	<div id="page">

	<?php 
		include("static/menu1.php");
	?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/fondo_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Contáctenos!</h1>	
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
					<div class="col-md-6 animate-box">
						<h3>Ubicación</h3>
						<section id="googleMaps">
				     		<script type="text/javascript">// <![CDATA[
				   				function mostrarGoogleMaps() {
							    //Creamos el punto a partir de las coordenadas:
							    	var punto = new google.maps.LatLng(-3.986977, -79.199330);
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
							           	title:"Savory"});
									}
				 			</script>
							<body  onload="mostrarGoogleMaps()" >
				 			<div id="mostrarMapa" style="width: 500px; height: 250px;"> </div>
		 				</section>
					</div>
					<div class="col-md-5 col-md-push-1 animate-box">
						<div class="gtco-contact-info">
							<h3>Información</h3>
							<ul>
								<li class="address">Dirección: UTPL</li>
								<li class="phone">0996985347</li>
								<li class="email">savory@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
        include("static/footer.php");
    ?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php 
		include("static/jquery.php");
	?>

	</body>
</html>

