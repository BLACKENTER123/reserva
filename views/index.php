<?php include_once 'views/template/header-principal.php' ?>
<!-- Start Sidebar Modal -->
<div class="sidebar-modal">
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							<i class="bx bx-x"></i>
						</span>
					</button>
					<h2 class="modal-title" id="myModalLabel2">
						<a href="index.html">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/home-one/logo.jpg" alt="Logo">
						</a>
					</h2>
				</div>
				<div class="modal-body">
					<div class="sidebar-modal-widget">
						<h3 class="title">About Us</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus eum laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore voluptate, autem pariatur? Dicta pariatur.</p>
					</div>
					<div class="sidebar-modal-widget">
						<h3 class="title">Additional Links</h3>
						<ul>
							<li>
								<a href="log-in.html">Log In</a>
							</li>
							<li>
								<a href="sign-up.html">Sign Up</a>
							</li>
							<li>
								<a href="faq.html">FAQ</a>
							</li>
							<li>
								<a href="#">Logout</a>
							</li>
						</ul>
					</div>
					<div class="sidebar-modal-widget">
						<h3 class="title">Contact Info</h3>
						<ul class="contact-info">
							<li>
								<i class="bx bx-location-plus"></i>
								Address
								<span>New York - 1060, Str. First 78 Great Western Road</span>
							</li>
							<li>
								<i class="bx bx-envelope"></i>
								Email
								<span>hello@prevoz.com</span>
							</li>
							<li>
								<i class="bx bxs-phone-call"></i>
								Phone
								<span>+502-464-679, +265-497-466</span>
							</li>
						</ul>
					</div>
					<div class="sidebar-modal-widget">
						<h3 class="title">Connect With Us</h3>
						<ul class="social-list">
							<li>
								<a href="#">
									<i class='bx bxl-twitter'></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class='bx bxl-facebook'></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class='bx bxl-instagram'></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class='bx bxl-linkedin'></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class='bx bxl-youtube'></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Sidebar Modal -->

<!-- Start Ecorik Slider Area -->
<section class="eorik-slider-area">
	<div class="eorik-slider owl-carousel owl-theme">
		<?php foreach ($data['sliders'] as $slider) { ?>
			<div class="eorik-slider-item" style="background-image: url(<?php echo RUTA_PRINCIPAL . 'assets/img/sliders/' . $slider['foto'] ?>);">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container">
							<div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
								<h1><?php echo $slider['titulo']; ?></h1>
								<span> <?php echo $slider['subtitulo']; ?> </span>
								<div class="slider-btn">
									<a class="default-btn" href="<?php echo $slider['url']; ?>">
										Mas informacion
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="white-shape">
		<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/home-one/slider/white-shape.png" alt="Image">
	</div>
	<div class="social-link">
		<ul>
			<li>
				<a href="#">
					<i class="bx bxl-facebook"></i>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="bx bxl-twitter"></i>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="bx bxl-linkedin"></i>
				</a>
			</li>
		</ul>
	</div>
</section>
<!-- End Ecorik Slider Area -->

<!-- Start Check Area -->
<div class="check-area mb-minus-70">
	<div class="container">
		<form class="check-form" id="formulario" action="<?php echo RUTA_PRINCIPAL . 'reserva/verify'; ?>">
			<div class="row align-items-center">
				<div class="col-lg-3 col-sm-6">
					<div class="check-content">
						<p>Ver desde:</p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-1">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" id="f_llegada" name="f_llegada" value="<?php echo date('Y-m-d'); ?>" placeholder="YYYY-MM-DD">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="check-content">
						<p>Ver hasta: </p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-2">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" id="f_salida" name="f_salida" value="<?php echo date('Y-m-d'); ?>" placeholder="YYYY-MM-DD">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="check-content">
						<div class="form-group">
							<label for="Canchas" class="form-label">Canchas</label>
							<select name="Canchas" id="Canchas">
								<option value="">Seleccionar</option>
								<?php foreach ($data['canchas'] as $cancha) { ?>
									<option value="<?php echo $cancha['id']; ?>"><?php echo $cancha['estilo']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="check-btn check-content mb-0">
						<button class="default-btn" type="submit">
							comprobar
							<i class="flaticon-right"></i>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Check Section -->

<!-- Start Explore Area -->
<section class="explore-area pt-170 pb-100">
	<div class="container">
		<div class="section-title">
			<span>Explore</span>
			<h2>We are cool to give you pleasure</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="explore-img">
					<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/explore-img.png" alt="Image">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="explore-content ml-30">
					<h2>As much as comfort want to get from us everything</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet reprehenderit ratione ad perspiciatis repudiandae iste ipsam temporibus sit quo! Incidunt, necessitatibus fugiat ut dignissimos pariatur odit natus ipsum! Obcaecati iste ipsam temporibus sit quo! Incidunt, necessitatibus Obcaecati iste ipsam temporibus Lorem ipsum dolor sit amet consectetur.</p>

					<p>Konin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nim ad minim veniam, quis nostrud exercitation. dolor sit amet, consectetur adipisicing quis nostrud exercitation Lorem ipsum dolor sit amet consectetur.</p>
					<a href="about.html" class="default-btn">
						explore More
						<i class="flaticon-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Explore Area -->

<!-- End Facilities Area -->
<section class="facilities-area pb-60">
	<div class="container">
		<div class="section-title">
			<span>Facilities</span>
			<h2>Giving entirely awesome</h2>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="single-facilities-wrap">
					<div class="single-facilities">
						<i class="facilities-icon flaticon-pickup"></i>
						<h3>Pick Up & Drop​</h3>
						<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
						<a href="service-details.html" class="icon-btn">
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-facilities-wrap">
					<div class="single-facilities">
						<i class="facilities-icon flaticon-coffee-cup"></i>
						<h3>Welcome Drink​​​​</h3>
						<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
						<a href="service-details.html" class="icon-btn">
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-facilities-wrap">
					<div class="single-facilities">
						<i class="facilities-icon flaticon-garage"></i>
						<h3>​​Parking Space</h3>
						<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
						<a href="service-details.html" class="icon-btn">
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-facilities-wrap">
					<div class="single-facilities">
						<i class="facilities-icon flaticon-water"></i>
						<h3>Cold Hot & Water​</h3>
						<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
						<a href="service-details.html" class="icon-btn">
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Facilities Area -->

<!-- End Incredible Area -->
<section class="incredible-area ptb-140 jarallax">
	<div class="container">
		<div class="incredible-content">
			<a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
				<i class="flaticon-play-button"></i>
			</a>
			<h2><span>Incredible!</span> Are you coming today</h2>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores sed obcaecati, magni excepturi, temporibus vero, inventore tenetur assumenda natus sequi labore. Voluptates eligendi dolores quod temporibus aperiam adipisci, quasi reprehenderit. Voluptates eligendi dolores quod temporibus.</p>
			<a href="#" class="default-btn">
				Join Us Today
				<i class="flaticon-right"></i>
			</a>
		</div>
	</div>
	<div class="white-shape">
		<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/shape/white-shape-top.png" alt="Image">
		<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/shape/white-shape-bottom.png" alt="Image">
	</div>
</section>
<!-- End Incredible Area -->

<!-- Start Our Rooms Area -->
<section class="our-rooms-area pt-60 pb-100">
	<div class="container">
		<div class="section-title">
			<span>Our Rooms</span>
			<h2>Fascinating rooms & suites</h2>
		</div>
		<div class="tab industries-list-tab">
			<div class="row">
				<div class="col-lg-4">
					<ul class="tabs">
						<li class="single-rooms">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/rooms/button-img-1.jpg" alt="Image">
							<div class="room-content">
								<h3>Double Room</h3>
								<span>From $75.9/night</span>
							</div>
						</li>
						<li class="single-rooms">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/rooms/button-img-2.jpg" alt="Image">
							<div class="room-content">
								<h3>Luxury Room</h3>
								<span>From $50.9/night</span>
							</div>
						</li>
						<li class="single-rooms">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/rooms/button-img-3.jpg" alt="Image">
							<div class="room-content">
								<h3>Best Room</h3>
								<span>From $70.9/night</span>
							</div>
						</li>
						<li class="single-rooms">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/rooms/button-img-4.jpg" alt="Image">
							<div class="room-content">
								<h3>Classic Room</h3>
								<span>From $95.9/night</span>
							</div>
						</li>
						<li class="single-rooms">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/rooms/button-img-5.jpg" alt="Image">
							<div class="room-content">
								<h3>Budget Room</h3>
								<span>From $95.9/night</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-8">
					<div class="tab_content">
						<div class="tabs_item">
							<div class="our-rooms-single-img room-bg-1">
							</div>
							<span class="preview-item">The Preview Of Double Room</span>
						</div>
						<div class="tabs_item">
							<div class="our-rooms-single-img room-bg-2">
							</div>
							<span class="preview-item">The Preview Of Luxury Room</span>
						</div>
						<div class="tabs_item">
							<div class="our-rooms-single-img room-bg-3">
							</div>
							<span class="preview-item">The Preview Of Best Room</span>
						</div>
						<div class="tabs_item">
							<div class="our-rooms-single-img room-bg-4">
							</div>
							<span class="preview-item">The Preview Of Classic Room</span>
						</div>
						<div class="tabs_item">
							<div class="our-rooms-single-img room-bg-5">
							</div>
							<span class="preview-item">The Preview Of Budget Room</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Our Rooms Area -->

<!-- Start City View Area -->
<section class="city-view-area ptb-100">
	<div class="container">
		<div class="city-wrap">
			<div class="single-city-item owl-carousel owl-theme">
				<div class="city-view-single-item">
					<div class="city-content">
						<span>The City View</span>
						<h3>A charming view of the city town</h3>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>

						<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
					</div>
				</div>
				<div class="city-view-single-item">
					<div class="city-content">
						<span>The City View</span>
						<h3>The charming view of the city</h3>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>

						<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End City View Area -->

<!-- Start Exclusive Area -->
<section class="exclusive-area pt-100 pb-70">
	<div class="container">
		<div class="section-title">
			<span>Exclusive Offers</span>
			<h2>You can get an exclusive offer </h2>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="exclusive-wrap">
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="exclusive-img bg-1"></div>
						</div>
						<div class="col-lg-6 pl-0">
							<div class="exclusive-content">
								<span class="title">Up To 30% Off</span>
								<h3>Swimming for man</h3>
								<span class="review">
									4.5
									<a href="#">(432 Reviews)</a>
								</span>
								<p>Swimming doller dolor sit aet odu tur adiing elitse</p>
								<ul>
									<li>
										<i class="bx bx-time"></i>
										Duration: 2Hours
									</li>
									<li>
										<i class="bx bx-target-lock"></i>
										18+ years
									</li>
								</ul>
								<a href="book-table.html" class="default-btn">
									Book Online
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="exclusive-wrap">
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="exclusive-img bg-2"></div>
						</div>
						<div class="col-lg-6 pl-0">
							<div class="exclusive-content">
								<span class="title">This Month Only</span>
								<h3>$5 Breakfast package</h3>
								<span class="review">
									5.0
									<a href="#">(580 Reviews)</a>
								</span>
								<p>Start $5 doller dolor sit aet odeu tur adiing elitse</p>
								<ul>
									<li>
										<i class="bx bx-time"></i>
										Duration: 2Hours
									</li>
									<li>
										<i class="bx bx-target-lock"></i>
										18+ years
									</li>
								</ul>
								<a href="book-table.html" class="default-btn">
									Book Online
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Exclusive Area -->

<!-- Start Booking Area -->
<section class="bokking-area pb-70">
	<div class="container">
		<div class="section-title">
			<span>Booking</span>
			<h2>Direct booking benefits</h2>
		</div>

		<div class="row">
			<div class="booking-col-2">
				<div class="single-booking">
					<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
						<i class="book-icon flaticon-online-booking"></i>
						<span class="booking-title">Free cost</span>
						<h3>No booking fee</h3>
					</a>

					<div class="modal fade" id="staticBackdrop">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">No booking fee</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
								</div>

								<div class="modal-footer">
									<a href="book-table.html" class="default-btn">
										Book Now
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="booking-col-2">
				<div class="single-booking">
					<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
						<i class="book-icon flaticon-podium"></i>
						<span class="booking-title">Free cost</span>
						<h3>Best rate guarantee</h3>
					</a>

					<div class="modal fade" id="staticBackdrop-2">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Best rate guarantee</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
								</div>

								<div class="modal-footer">
									<a href="book-table.html" class="default-btn">
										Book Now
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="booking-col-2">
				<div class="single-booking">
					<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">
						<i class="book-icon flaticon-airport"></i>
						<span class="booking-title">Free cost</span>
						<h3>Reservations 24/7</h3>
					</a>

					<div class="modal fade" id="staticBackdrop-3">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Reservations 24/7</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
								</div>

								<div class="modal-footer">
									<a href="book-table.html" class="default-btn">
										Book Now
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="booking-col-2">
				<div class="single-booking">
					<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-4">
						<i class="book-icon flaticon-slow"></i>
						<span class="booking-title">Free cost</span>
						<h3>High-speed Wi-Fi</h3>
					</a>

					<div class="modal fade" id="staticBackdrop-4">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">High-speed Wi-Fi</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
								</div>

								<div class="modal-footer">
									<a href="book-table.html" class="default-btn">
										Book Now
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="booking-col-2">
				<div class="single-booking">
					<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-5">
						<i class="book-icon flaticon-coffee-cup-1"></i>
						<span class="booking-title">Free cost</span>
						<h3>Free breakfast</h3>
					</a>

					<div class="modal fade" id="staticBackdrop-5">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Free breakfast</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
								</div>

								<div class="modal-footer">
									<a href="book-table.html" class="default-btn">
										Book Now
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Booking Area -->

<!-- Start Restaurants Area -->
<section class="restaurants-area pb-100">
	<div class="container-fluid p-0">
		<div class="section-title">
			<span>Restaurants</span>
			<h2>The area we cover under Ecorik</h2>
		</div>

		<div class="restaurants-wrap owl-carousel owl-theme">
			<div class="single-restaurants bg-1">
				<i class="restaurants-icon flaticon-coffee-cup"></i>
				<span>Restaurants</span>
				<p>Restaurant wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaua. Ut nipor incididuit might br minim veniam.</p>
				<a href="#" class="default-btn">
					Explore More
					<i class="flaticon-right"></i>
				</a>
			</div>
			<div class="single-restaurants bg-2">
				<i class="restaurants-icon flaticon-swimming"></i>
				<span>Swimming Pool</span>
				<p>Restaurant wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaua. Ut nipor incididuit might br minim veniam.</p>
				<a href="#" class="default-btn">
					Explore More
					<i class="flaticon-right"></i>
				</a>
			</div>
			<div class="single-restaurants bg-3">
				<i class="restaurants-icon flaticon-speaker"></i>
				<span>Conference Room</span>
				<p>Restaurant wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaua. Ut nipor incididuit might br minim veniam.</p>
				<a href="#" class="default-btn">
					Explore More
					<i class="flaticon-right"></i>
				</a>
			</div>
			<div class="single-restaurants bg-4">
				<i class="restaurants-icon flaticon-podium"></i>
				<span>Best Rate</span>
				<p>Restaurant wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaua. Ut nipor incididuit might br minim veniam.</p>
				<a href="#" class="default-btn">
					Explore More
					<i class="flaticon-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- End Restaurants Area -->

<!-- start Testimonials Area -->
<section class="testimonials-area pb-100">
	<div class="container">
		<div class="section-title">
			<span>Testimonials</span>
			<h2>What customers say</h2>
		</div>
		<div class="testimonials-wrap owl-carousel owl-theme">
			<div class="single-testimonials">
				<ul>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
				</ul>
				<h3>Excellent Room</h3>
				<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
				<div class="testimonials-content">
					<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/testimonials/2.jpg" alt="Image">
					<h4>Ayman Jenis</h4>
					<span>CEO@Leasuely</span>
				</div>
			</div>
			<div class="single-testimonials">
				<ul>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
				</ul>
				<h3>Excellent hotel</h3>
				<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
				<div class="testimonials-content">
					<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/testimonials/3.jpg" alt="Image">
					<h4>Ayman Jenis</h4>
					<span>CEO@Leasuely</span>
				</div>
			</div>
			<div class="single-testimonials">
				<ul>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
				</ul>
				<h3>Excellent Swimming</h3>
				<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
				<div class="testimonials-content">
					<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/testimonials/1.jpg" alt="Image">
					<h4>Ayman Jenis</h4>
					<span>CEO@Leasuely</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Testimonials Area -->

<!-- End News Area -->
<section class="news-area pb-60">
	<div class="container">
		<div class="section-title">
			<span>Our BLog</span>
			<h2>News & articles updates </h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/news/1.jpg" alt="Image">
						</a>
						<div class="dates">
							<span>HOTEL</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comment
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>Celebrating Decade Years Of Hotel In 2020</h3>
						</a>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
						<a class="read-more" href="news-details.html">
							Read More
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/news/2.jpg" alt="Image">
						</a>
						<div class="dates">
							<span>PRICE</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comment
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>A Perfect Day With Businessman At Ecorik Hotel</h3>
						</a>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
						<a class="read-more" href="news-details.html">
							Read More
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src="<?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>
/img/news/1.jpg" alt="Image">
						</a>
						<div class="dates">
							<span>STORE</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comment
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>Celebrating Decade Years Of Hotel In 2019</h3>
						</a>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
						<a class="read-more" href="news-details.html">
							Read More
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End News Area -->


</html>


<style>
	.form-group {
		position: relative;
	}

	select {
		width: 100%;
		max-width: 100%;
		max-height: 200px;
		/* Cambia este valor según sea necesario */
		overflow-y: auto;
		/* Agrega barras de desplazamiento vertical si es necesario */
	}
</style>
<?php include_once 'views/template/footer-principal.php' ?>
<?php if (!empty($_GET['respuesta']) && $_GET['respuesta'] == 'warning') : ?>
	<script>
		alertSW('Todos los campos son requeridos', 'warning');
	</script>
<?php endif; ?>