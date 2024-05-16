<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<!-- Start Sign Up Area -->
<section class="user-area-all-style sign-up-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="contact-form-action">
					<div class="form-heading text-center">
						<h3 class="form-title">Crea tu cuenta</h3>
					</div>
					<form id="form" autocomplete="off">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<input class="form-control" type="text" name="nombre" placeholder="Ingresa tu nombre" required>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 ">
							<div class="form-group">
								<input class="form-control" type="text" name="apellido" placeholder="Ingresa tus apellidos" required>
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<input class="form-control" type="email" name="correo" placeholder="Ingresa tu correo" required>
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<input class="form-control" type="password" name="clave" placeholder="Ingresa una contraseña" required>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 ">
							<div class="form-group">
								<input class="form-control" type="password" name="confirmar" placeholder="Reingresa la contraseña" required>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-condition">
							<div class="agree-label">
								<input type="checkbox" id="condiciones" name="condiciones" required>
								<label for="condiciones">
									Acepto
									<a href="#">los terminos y condiciones</a>
								</label>
							</div>
						</div>
						<div class="col-12">
							<button class="default-btn btn-two" type="submit">
								Registrarse
								<i class="flaticon-right"></i>
							</button>
						</div>
						<div class="col-12">
							<p class="account-desc">
								¿Ya posees una cuenta?
								<a href="<?php echo RUTA_PRINCIPAL . 'login'; ?>"> Iniciar sesión</a>
							</p>
						</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- End Sign Up Area -->

<?php include_once 'views/template/footer-principal.php'; ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/registro.js' ?>"></script>

</body>

</html>