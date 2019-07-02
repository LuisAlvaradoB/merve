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
								<br>
								<li style="list-style: none;"><a href="index.php">HOME</a>
								</li>
								<li style="list-style: none;"><a href="#section-experiencias">EXPERIENCIAS</a>
								</li>
								<li style="list-style: none;"><a href="#section-explora">EXPLORA</a>
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
							<!--Lenguajes de la pagina-->
							<div class = "header";>
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
	

	<div id="section-experiencias"></div>
	<section style="background-color:black; border-block-start: 20px;" class="mg-best-rooms">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 main-experiencias-personalizadas">
					<div class="mg-sec-title undefined">
						<h2 id="title-explora-exp">EXPERIENCIAS PERSONALIZADAS</h2> 
					</div>
					<div class="row" style="margin-top: -15px;">
						<div class="col-md-3 p-0">
							<div class="container_test">
								<figure class="mg-room "><img class="img-fluid img-explora"  src="assets/images/01-encuentros-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">GOLF</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">ENCUENTROS Y REENCUENTROS</h2>
											<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px;" href="experiencia-landing-1.php">Descubre</a>
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
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">EMPRESARIALES DIFERENTES</h2>
											<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px;" href="experiencia-landing-1.php">Descubre</a>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="container_test">
								<figure class="mg-room "><img class="img-fluid img-explora"  src="assets/images/03-celebraciones-especiales-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">GOLF</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">CELEBRACIONES ESPECIALES</h2>
											<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px;" href="experiencia-landing-1.php">Descubre</a>
									</figcaption>
								</figure>
							</div>
						</div>
						<div class="col-md-3 p-0">
							<div class="container_test">
								<figure class="mg-room "><img class="img-fluid img-explora"  src="assets/images/04-locaciones-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">GOLF</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">UBICACION</h2>
											<div class="mg-room-rating" style="margin-right: 20px; display: none;"><i class="fa fa-star"> </i>
										</div>
										<a class="btn btn-main" style="margin: 30px;" href="experiencia-landing-1.php">Descubre</a>
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
								<figure class="mg-room "><img class="img-fluid img-explora" style="height: 350px;" src="assets/images/06-Golf-2-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">GOLF</h2>
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
								<figure class="mg-room "><img class="img-fluid img-explora" style="height: 350px;" src="assets/images/06-Golf-2-min.png" alt="img-bigFamily" />
									<figcaption style="margin-top:0px"> 
										<h2 style="display: none;">GOLF</h2>
										<div class="mg-room-rating" style="display: none;"><i class="fa fa-star"> </i>
										</div>

										<div class="overlay">
											<h2 style="margin-top: 25px; margin-left: 20px; margin-right: 20px; font-family: AvantGardeBookBT;">EN MOVIMIENTO</h2>
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