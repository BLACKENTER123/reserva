<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<!-- Start Log In Area -->
<section class="user-area-all-style log-in-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Iniciar Sesión</h3>
                    </div>
                    <form id="form" autocomplete="off">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="email" name="correo" placeholder="Ingresa tu correo">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="password" name="clave" placeholder="Ingresa tu contraseña">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <a class="forget" href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="col-12">
                            <button class="default-btn btn-two" type="submit">
                                Iniciar Sesión
                                <i class="flaticon-right"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <p class="account-desc">
                                ¿No estas Registrado? Registrate aqui
                                <a href="<?php echo RUTA_PRINCIPAL . 'registro'; ?>">Registrarse</a>
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

<?php include_once 'views/template/footer-principal.php'; ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/login.js' ?>"></script>

</body>

</html>