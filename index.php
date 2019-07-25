<!DOCTYPE html>
<html lang="en">

<title>Casa Molle Villa & Golf | Un hotel único en el mundo</title>
<?php require 'assets/partials/header.php' ?>

<body>
	<div class="preloader"></div>
	<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/idiomas.css">


	<div class="topnav topna" id="myTopnav">
		<a href="index.php" class="active">Home</a>
		<a href="#section-experiencias">Experiencias</a>
		<a href="#section-explora">Explora</a>
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
								<div class="logo-nav">
									<img src="assets/images/Logo_Casa_molle1.png" alt="400">
								</div>
								<br>
								<div class="reservation">
								<div class="btn-reservation">
									<p><a href="https://casamolle.paxer.com/reservacion">Reservar <i class="far fa-1x fa-calendar-alt icono-calendar"></i></a> </p>
									
								</div>
								</div>
								<br>
								<a href="index.php">
									<div class="section-nav"><p>Inicio</p></div>
								</a>
								<a href="galeria.php">
									<div class="section-nav"><p>Galeria</p></div>
								</a>
								<ul class= "title_section">
									<li id="nav_display" class= "nav_display">
											<a href="#section-experiencias" class="title-experienicias"><p>Experiencias</p></a>
										<span onclick="displayMenu();">
										<i id="arrowIcon" class="fas fa-chevron-down icon-arrow"></i>
										</span>
										<hr>
										<ul id="subMenu" class= "sub_title_section display">
											<li><a href="experiencia-landing-1.php">Familia</a></li>
											<li><a href="experiencia-landing-1.php">Bienestar</a></li>
											<li><a href="experiencia-landing-1.php">Eventos</a></li>
											<li><a href="experiencia-landing-1.php">Corporativo</a></li>
										</ul>
									</li>
								</ul>
								<a href="index.php#testimonial-nav">
									<div class="section-nav"><p>Comunidad</p></div>
								</a>
								<a href="contacto.php">
									<div class="section-nav"><p>Contacto</p></div>
								</a>
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
								<a href="https://casamolle.paxer.com/reservacion" class="btn btn-warning btn-sm" style="margin: 0; padding: 0;">
									<button type="button" id="btn-style" class="btn btn-warning btn-sm">
										Reservations <i class="far fa-1x fa-calendar-alt"></i>
									</button>
								</a>
							</div>
							<!--Lenguajes de la pagina-->
							<div class = "header">
								<ul class = "nav">
									<li><a href="#">LENG</a>
										<ul>
											<li><a href="#">ESP</a></li>
											<li><a href="#">EN</a></li>
											<li><a href="#">POR</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<script>
						/* Set the width of the side navigation to 250px */
						function openNav() {
							document.getElementById("mySidenav").style.width = "250px";
						}

						/* Set the width of the side navigation to 0 */
						function closeNav() {
							document.getElementById("mySidenav").style.width = "0";
						}
					</script>
					<script src="assets/js/nav-menu.js"></script>
				</nav>
			</div>
		</nav>
	</header>

	<?php require 'assets/partials/carousel-slide.php' ?>
	<?php require 'assets/partials/banner-comunidad-section.php' ?>
	

	<div id="section-experiencias"></div>
	<section style="background-color:#7b6e5e; border-block-start: 20px;" class="mg-best-rooms">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 main-experiencias-personalizadas">
					<div class="mg-sec-title undefined">
						<h2 id="title-explora-exp" style="padding-top: 0px;margin-top: -65px;margin-bottom: 24px;">WE PROMISE GREAT MEMORIES <img src="assets/images/Estrella.png" width="60" alt=""> </h2> 
					</div>
					<div class="row" style="margin-top: -15px;">
						<div class="col-md-3 p-0">
							<div class="container_test">
								<figure class="mg-room "><img class="img-fluid img-explora"  src="assets/images/Familia-min.png" alt="img-bigFamily" />
										<figcaption style="margin-top:0px"> 
											<h2 style="display: none;">GOLF</h2>
											<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
											</div>

											<div class="overlay">
												<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">FAMILIA</h2>
												<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
											</div>
											<a class="btn btn-main" style="margin: 30px; position:absolute; right:27%; bottom:10%;" href="experiencia-landing-1.php">Descubre</a>
										</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="container_test">
								<figure class="mg-room "><img class="img-fluid img-explora"  src="assets/images/bienestar-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">GOLF</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">BIENESTAR</h2>
											<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px; position:absolute; right:27%; bottom:10%;" href="experiencia-landing-1.php">Descubre</a>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="container_test">
							<figure class="mg-room "><img class="img-fluid img-explora"  src="assets/images/01-encuentros-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">GOLF</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">EVENTOS</h2>
											<div class="mg-room-rating" style="margin-right: 20px ;   display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px; position:absolute; right:27%; bottom:10%;" href="experiencia-landing-1.php">Descubre</a>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="container_test">
							<figure class="mg-room "><img class="img-fluid img-explora"  src="assets/images/02-empresariales-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">GOLF</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">CORPORATIVO</h2>
											<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px; position:absolute; right:27%; bottom:10%;" href="experiencia-landing-xperiencia-landing-1.php">Descubre</a>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div id="section-explora"></div>
			</div>
		</div>
	</section>

	<section style="background-color:#4b5e71;" id="main-section-experiencias main-section-explora " class="mg-best-rooms">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 main-experiencias-personalizadas" style="margin-top: -75px;"">
					<!-- <div class="mg-sec-title undefined">
						<h2 id="title-explora-exp">EXPLORA CASA MOLLE</h2>
					</div> -->
					<div class="row" style="margin-bottom: -30px; margin-top: -15px;"> 

					<div class="col-md-6 p-0">
						<div class="container_test">
									<figure class="mg-room "><img class="img-fluid img-explora" style="height: 350px;" src="assets/images/cosasporhacer-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">CasaMolle</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">COSAS POR HACER</h2>
											<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px;" href="experiencia-landing-1.php">Descubre</a>
									</figcaption>
								</figure>
							</div>
						</div>

						<div class="col-md-6 p-0">
							<div class="container_test">
							<figure class="mg-room "><img class="img-fluid img-explora" style="height: 350px;" src="assets/images/ubicación-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">CasaMolle</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">UBICACIÓN</h2>
											<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px;" href="experiencia-landing-1.php">Descubre</a>
									</figcaption>
								</figure>
							</div>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<?php require 'assets/partials/section-banner-rrss.php' ?>

	

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