<!DOCTYPE html>
<html lang="en">

<title>Casa Molle Villa & Golf | Un hotel único en el mundo</title>
<?php require 'assets/partials/header.php' ?>

<body>
	<div class="preloader"></div>
	<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<div class="topnav topna" id="myTopnav">
		<a href="index.php" class="active">Home</a>
		<a href="index.php#main-section-experiencias">Experiencias</a>
		<a href="#contacto.php">Contact</a>
		<a href="galeria.php">Galería</a>
		<a href="index.php#testimonial-nav">Comunidad</a>
		<a href="contacto.php">Contacto</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>

	<script>
		/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
	<header class="header transp sticky">
		<nav class="navbar navbar-inverse" style="padding-bottom: 20px;">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="row" style="width:100%;">
						<div class="col-md-2 col-xs-5">
							<div id="mySidenav" class="sidenav">
								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								<br>
								<li style="list-style: none;"><a href="index.php">HOME</a>
								</li>
								<li style="list-style: none;" class="dropdown active"><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXPERIENCIAS</a>
									<ul class="dropdown-menu">
										<li><a href="great-moment.php">Great Moment</a>
										</li>
										<li><a href="big-family.php">Big Family</a>
										</li>
										<li><a href="business-meetings.php">Business & Meetings</a>
										</li>
										<li><a href="weddings-events.php">Weddings & Events</a>
										</li>
									</ul>
								</li>
								<li style="list-style: none;"><a href="galeria.php">GALERIA</a>
								</li>
								<li style="list-style: none;"><a href="index.php#testimonial-nav">COMUNIDAD</a>
								</li>
								<li style="list-style: none;"><a href="contacto.php">CONTACTO</a>
								</li>
							</div>

							<div class="menu-transparente" id="iconmenu">
								<button onclick="openNav()" type="button" id="btn-style" class="btn btn-warning btn-sm">
									<i class="fas fa-1x fa-bars"></i> Menu
								</button>
							</div>

						</div>
						<div class="col-md-8 col-xs-2">
							<!-- <img class="menu-transparente" id="imglogo" src="assets/images/Logo_Casa_molle.png" alt=""> -->
						</div>
						<div class="col-md-2 col-xs-5">
							<div class="menu-transparente" id="iconcalendar">
								<button type="button" id="btn-style" class="btn btn-warning btn-sm">
									Reservations <i class="far fa-1x fa-calendar-alt"></i>
								</button>
							</div>
						</div>
					</div>

					<script>
						/* Set the width of the side navigation to 250px */
						function openNav() {
							document.getElementById("mySidenav").style.width = "300px";
						}

						/* Set the width of the side navigation to 0 */
						function closeNav() {
							document.getElementById("mySidenav").style.width = "0";
						}
					</script>
				</nav>
			</div>
		</nav>
	</header>

	<?php require 'assets/partials/carousel-slide.php' ?>
	<?php require 'assets/partials/banner-comunidad-section.php' ?>
	<?php require 'assets/partials/section-quote.php' ?>

	<!-- <section id="main-section-experiencias" class="mg-best-rooms">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mg-sec-title undefined">
						<h2>EXPLORA CASA MOLLE</h2>
					</div>
					<div class="row">
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid" src="assets/images/GREAT_MOMENT1.png" alt="img-greatMoment" />
								<figcaption style="top:200px">
									<h2>GREAT MOMENT</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="great-moment.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid" src="assets/images/BIG_FAMILY.png" alt="img-bigFamily" />
								<figcaption style="top:200px">
									<h2>BIG FAMILY</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="big-family.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid" src="assets/images/BUSINESS_MEETINGS.png" alt="img-business" />
								<figcaption style="top:200px">
									<h2>BUSINESS & MEETINGS</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="business-meetings.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid" src="assets/images/WEDDINGS_EVENTS_.png" alt="img-weddings" />
								<figcaption style="top:200px">
									<h2>WEDDINGS & EVENTS</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>

									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="weedings-events.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section style="background-color:#4b5e71;" id="main-section-experiencias " class="mg-best-rooms">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 main-experiencias-personalizadas">
					<div class="mg-sec-title undefined">
						<h2 id="title-explora-exp">EXPERIENCIAS PERSONALIZADAS</h2>
					</div>
					<div class="row">
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid img-explora" src="assets/images/GREAT_MOMENT1.png" alt="img-greatMoment" />
								<figcaption style="top:150px">
									<h2>GREAT MOMENT</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="great-moment.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid img-explora" src="assets/images/BIG_FAMILY.png" alt="img-bigFamily" />
								<figcaption style="top:150px">
									<h2>BIG FAMILY</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="big-family.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid img-explora" src="assets/images/BUSINESS_MEETINGS.png" alt="img-business" />
								<figcaption style="top:150px">
									<h2>BUSINESS & MEETINGS</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="business-meetings.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid img-explora" src="assets/images/WEDDINGS_EVENTS_.png" alt="img-weddings" />
								<figcaption style="top:150px">
									<h2>WEDDINGS & EVENTS</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>

									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="weedings-events.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="background-color:#4b5e71; margin-top: -70px;" id="main-section-experiencias " class="mg-best-rooms">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 main-experiencias-personalizadas">
					<div class="mg-sec-title undefined">
						<h2 id="title-explora-exp">EXPLORA CASA MOLLE</h2>
					</div>
					<div class="row">
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid img-explora" src="assets/images/GREAT_MOMENT1.png" alt="img-greatMoment" />
								<figcaption style="top:150px">
									<h2>GREAT MOMENT</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="great-moment.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid img-explora" src="assets/images/BIG_FAMILY.png" alt="img-bigFamily" />
								<figcaption style="top:150px">
									<h2>BIG FAMILY</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="big-family.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid img-explora" src="assets/images/BUSINESS_MEETINGS.png" alt="img-business" />
								<figcaption style="top:150px">
									<h2>BUSINESS & MEETINGS</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>
									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="business-meetings.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-3">
							<figure class="mg-room "><img class="img-fluid img-explora" src="assets/images/WEDDINGS_EVENTS_.png" alt="img-weddings" />
								<figcaption style="top:150px">
									<h2>WEDDINGS & EVENTS</h2>
									<div class="mg-room-rating"><i class="fa fa-star"> </i>

									</div>

									<p>adversantur probatum iudicante indicaverunt repugnantibus.</p><a class="btn btn-main" href="weedings-events.php">Descubre</a>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="mg-book-now">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-xs-12">
					<div class="row">
						<h3 style="color: #e7b315">Conecta con CasaMolle</h3>
					</div>
				</div>
				<div class="col-lg-6 col-xs-12">
					<div class="row">
						<a href="https://www.instagram.com/casamollevillaandgolf/" target="_blanck"><i class=" fab fa-instagram fa-3x" style="color:white; padding-right: 30px;"></i></a>
						<a href="https://www.facebook.com/CasaMolleVilla/" target="_blank"><i class=" fab fa-facebook fa-3x" style="color:white; padding-right: 30px;"></i></a>
						<a href="https://twitter.com/casamollevilla" target="_blanck"><i class=" fab fa-twitter fa-3x" style="color:white; padding-right: 30px;"></i></a>
						<a href="https://cl.linkedin.com/company/casamollevilla" target="_blanck"><i class=" fab fa-linkedin fa-3x" style="color:white; padding-right: 30px;"></i>
							<a href="https://www.tripadvisor.cl/Hotel_Review-g970257-d15289729-Reviews-Casamolle_Villa_Golf-Vicuna_Coquimbo_Region.html" target="_blanck"><i class=" fab fa-tripadvisor fa-3x" style="color:white; padding-right: 30px;"></i></a>
					</div>
				</div>
				<div class="col-lg-2 col-xs-12">
					<div class="row">
						<a href="https://casamolle.paxer.com/reservacion" target="_blank" class="btn btn-main btn-block ">Descargar Brochure</a>
					</div>
				</div> <!-- col-lg-9 -->
			</div>
		</div>
	</section>
	<!-- LightWidget WIDGET -->
	<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/b94c1f1862f9503aa09650224b4852ee.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>





	<section class="mg-features">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mg-sec-title undefined">
						<h2>Comodidades del Hotel</h2>
						<p>These best rooms chosen by our customers</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="mg-feature">
								<div class="mg-feature-icon-title"><i class="fp-ht-receptionist"></i>
									<h3>24-hour reception</h3>
								</div>
								<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mg-feature">
								<div class="mg-feature-icon-title"><i class="fa fa-cogs"></i>
									<h3>Room service</h3>
								</div>
								<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mg-feature">
								<div class="mg-feature-icon-title"><i class="fa fa-car"></i>
									<h3>Car hire</h3>
								</div>
								<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="mg-feature">
								<div class="mg-feature-icon-title"><i class="fa fa-phone"></i>
									<h3>Wake-up call</h3>
								</div>
								<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mg-feature">
								<div class="mg-feature-icon-title"><i class="fa fa-coffee"></i>
									<h3>Coffee and tea</h3>
								</div>
								<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mg-feature">
								<div class="mg-feature-icon-title"><i class="fp-ht-computer"></i>
									<h3>Free Wi-Fi</h3>
								</div>
								<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php require 'assets/partials/testimonial-slider.php' ?>
	<?php require 'assets/partials/footer.php' ?>
	<!--
		All JavaScripts Codes Loaded
		Ex: jquery, bootstrap, etc.
		-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jssor.slider.mini.js"></script>
	<script src="assets/js/classie.js"></script>
	<script src="assets/js/selectFx.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/starrr.min.js"></script>
	<script src="assets/js/nivo-lightbox.min.js"></script>
	<script src="assets/js/jquery.shuffle.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>