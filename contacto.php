<!DOCTYPE html>
<html lang="en">

<title>Contacto | Casa Molle Villa & Golf </title>
<?php require 'assets/partials/header.php' ?>

<body>
	<div class="preloader"></div>
	<header class="header transp sticky">
		<div class="topnav topna" id="myTopnav">
			<a href="index.php" class="active">Home</a>
			<a href="index.php#section-experiencias">Experiencias</a>
			<a href="index.php#section-explora">Explora</a>
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
									<li style="list-style: none;"><a href="index.php#section-experiencias">EXPERIENCIAS</a>
									</li>
									<li style="list-style: none;"><a href="index.php#section-explora">EXPLORA</a>
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
	</header>
	<div style="position: relative;">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div style="position: absolute; margin-left: 70px;">
						<img id="imglogo" src="assets/images/Logo_Casa_molle.png" alt="">
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="mg-page-title main-img-contacto parallax">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Contacto</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="mg-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<h2 class="mg-sec-left-title">Enviar un correo electrónico</h2>
					<form class="clearfix">
						<div class="mg-contact-form-input">
							<label for="full-name">Nombre</label>
							<input class="form-control" id="full-name" type="text">
						</div>
						<div class="mg-contact-form-input">
							<label for="email">E-mail</label>
							<input class="form-control" id="email" type="text">
						</div>
						<div class="mg-contact-form-input">
							<label for="subject">Asunto</label>
							<input class="form-control" id="subject" type="text">
						</div>
						<div class="mg-contact-form-input">
							<label for="subject">Mensaje</label>
							<textarea class="form-control" id="subject" rows="5"></textarea>
						</div>
						<input class="btn btn-dark-main pull-right" type="submit" value="Enviar">
					</form>
				</div>
				<div class="col-lg-7 mt-4 mt-lg-0">
					<h2 class="mg-sec-left-title">Dirección</h2>
					<p>Consulatu quietem ipsas obruamus. Controversia unam queo firmam videri, afranius derigatur sine sentit inliberali beatam scribendi splendide. Recusabo maximisque ferentur arbitraretur vellem oritur cupiditatibus copulatas.</p>
					<ul class="mg-contact-info">
						<li><i class="fa fa-map-marker"></i> Fundo la Barrica s/n, El Molle, Vicuña, Región de Coquimbo</li>
						<li><i class="fa fa-phone"></i> +569 44257739</li>
						<li><i class="fa fa-envelope"></i> <a href="mailto:info@casamolle.cl">info@casamolle.cl</a>
						</li>
					</ul>
					<div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27648.033069965604!2d-70.9265752!3d-29.9793112!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96903b081ed59e51%3A0x4e32a142e7fd70d3!2sCasaMolle+Villa+%26+Golf!5e0!3m2!1ses!2scl!4v1555908510487!5m2!1ses!2scl" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

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