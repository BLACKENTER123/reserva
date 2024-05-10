<?php include_once 'views/template/header-principal.php' ?>



<body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->


		<!-- Start Page Title Area -->
		<div class="page-title-area">
		
		</div>
		<!-- End Page Title Area -->

		<!-- Start Log In Area -->
		<section class="user-area-all-style log-in-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-form-action">
							<div class="form-heading text-center">
								<h3 class="form-title">Ingreso de sistema</h3>
								<p class="form-desc">O puedes ocupar tus redes sociales</p>
							</div>
							<form method="post">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12">
										<button class="default-btn" type="submit">
											Google
											<i class="bx bxl-google"></i> 
										</button>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<button class="default-btn" type="submit">
											Facebook
											<i class="bx bxl-facebook"></i>
										</button>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<button class="default-btn" type="submit">
											Twitter
											<i class="bx bxl-twitter"></i>
										</button>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input class="form-control" type="text" name="name" placeholder="Correo Electronico">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input class="form-control" type="password" name="password" placeholder="Contraseña">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 form-condition">
										<div class="agree-label">
											<input type="checkbox" id="chb1">
											<label for="chb1">
												Recuerdame
											</label>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<a class="forget" href="recover-password.html">Perdiste tu contraseña?</a>
									</div>
									<div class="col-12">
										<button class="default-btn btn-two" type="submit">
											Log In Now
											<i class="flaticon-right"></i>
										</button>
									</div>
									<div class="col-12">
										<p class="account-desc">
Eres nuevo?											<a href="sign-up.html">Registrate</a>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Log In Area -->
	

        
    
    </body>




<?php include_once 'views/template/footer-principal.php' ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/login.js' ?>">

</script>