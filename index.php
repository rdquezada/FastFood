<!DOCTYPE HTML>
<html>
	<?php 
		include("static/head.php");
	?>

	<body>
	<div class="gtco-loader"></div>
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">FastFood <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="services.php">Servicios</a></li>
						<li><a href="contact.php">Contactos</a></li>
						
					</ul>	
				</div>
			</div>
		</div>
	</nav>	

	<?php 
        include("static/header_index.php");
    ?>
		
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Especialidades</h2>
					<p>-------------------------------------------------------------</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-4 col-sm-6">
					<a href="images/foto1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/foto1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>HAMBURGUESAS</h2>
							<p><span class="price cursive-font">Hamburguesas completas, grandes, medianas y simples</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-6">
					<a href="images/vasoLimonada.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/vasoLimonada.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>COMPLEMENTOS</h2>
							<p><span class="price cursive-font">Papas fritas, arroz, bebidas y más</span></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<?php 
        include("static/registro_index.php");
    ?>
	
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