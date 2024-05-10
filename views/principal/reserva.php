<?php include_once 'views/template/header-principal.php' ?>
<?php include_once 'views/template/portada.php' ?>
<section class="news-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Ver Disponibilidad</span>
			<h2>Horario disponibles</h2>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="alert alert-<?php echo isset($data['tipo']) ? htmlspecialchars($data['tipo']) : ''; ?> alert-dismissible fade show" role="alert">
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
					<?php echo isset($data['mensaje']) ? htmlspecialchars($data['mensaje']) : ''; ?>
				</div>
				<input type="hidden" id="f_llegada" value="<?php echo $data['disponible']['f_llegada']; ?>">
				<input type="hidden" id="f_salida" value="<?php echo $data['disponible']['f_salida']; ?>">
				<input type="hidden" id="cancha" value="<?php echo $data['disponible']['cancha']; ?>">
				<div id='calendar'>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
					<div class="check-content">
						<p>Ver desde:</p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-1">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" id="f_llegada" name="f_llegada" value="<?php echo date('Y-m-d'); ?>" placeholder="29/02/2020">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-sm-6">
					<div class="check-content">
						<p>Ver hasta: </p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-2">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" id="f_salida" name="f_salida" value="<?php echo date('Y-m-d'); ?>" placeholder="29/02/2020">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="check-content">
						<div class="form-group">
							<label for="Canchas" class="form-label">Canchas</label>
							<select name="Canchas" id="Canchas" class="form-control">
    <option value="">Seleccionar</option>
    <?php foreach ($data['canchas'] as $cancha) { ?>
        <option value="<?php echo $cancha['id']; ?>"><?php echo $cancha['estilo']; ?></option>
    <?php } ?>
</select>
<div class="col-lg-3">
							<div class="check-btn check-content mb-0">
								<button class="default-btn" type="submit">
                                    comprobar
									<i class="flaticon-right"></i>
								</button>
							</div> 
                        </div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php include_once 'views/template/footer-principal.php' ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/reservas.js' ?>">

</script>
