<div id="gtco-subscribe" >
	<div class="gtco-container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
				<h2 class="cursive-font">Registrarse!</h2>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2">
				<form action="include/guardar_usuario.php" class="form-inline" method="post">
					<div class="col-md-12 col-sm-12">
						<div class="form-group">
							<!--<label for="id_usuario"><b>Cédula:</b></label>-->
							<input type="text" REQUIRED class="form-control" id="id_usuario" name="id_usuario" placeholder="Cédula">
						</div>
						<div class="form-group">
							<!--<label for="nombres"><b>Nombres:</b></label>-->
							<input type="text" REQUIRED class="form-control" id="nombres" name="nombres" placeholder="Nombres">
						</div>
						<div class="form-group">
							<!--<label for="email"><b>Email:</b></label>-->
							<input type="text" REQUIRED class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<!--<label for="telefono"><b>Teléfono:</b></label>-->
							<input type="text" REQUIRED class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
						</div>
						<div class="form-group">
							<!--<label for="direccion"><b>Dirección:</b></label>-->
							<input type="text" REQUIRED class="form-control" id="direccion" name="direccion" placeholder="Dirección">
						</div>
						<div class="form-group">
							<!--<label for="contrasenia"><b>Contraseña:</b></label>-->
							<input type="text" REQUIRED class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default btn-block">REGISTRARSE</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>