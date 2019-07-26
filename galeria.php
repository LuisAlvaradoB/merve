<!DOCTYPE html>
<html lang="en">
	
	<title>Galería | Casa Molle Villa & Golf </title>
  	<?php require 'assets/partials/header.php'?>
	
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
												<li><a href="experiencia-landing-1.php">Parejas y Amigos</a></li>
												<li><a href="experiencia-landing-1.php">Bienestar</a></li>
												<li><a href="experiencia-landing-1.php">Celebraciones</a></li>
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
									<button type="button" id="btn-style" class="btn btn-warning btn-sm">
										Reservations <i class="far fa-1x fa-calendar-alt"></i>
									</button>
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
						<img id="imglogo" src="assets/images/Logo_Casa_molle1.png" alt="">
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</div>
		
		<div class="mg-page-title main-img-galeria-page parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Galeria</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="mg-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-filter">
							<form id="mg-filter">
								<fieldset>
									<label class="btn btn-dark btn-main">
										<input type="radio" name="filter" value="all" checked="checked">All
									</label>
									<label class="btn btn-dark">
										<input type="radio" name="filter" value="actividades">Actividades
									</label>
									<label class="btn btn-dark">
										<input type="radio" name="filter" value="business-meetings">Business & Meetings
									</label>
									<label class="btn btn-dark">
										<input type="radio" name="filter" value="gastronomia">Gastronomía
									</label>
									<label class="btn btn-dark">
										<input type="radio" name="filter" value="golf">Golf
									</label>
									<label class="btn btn-dark">
										<input type="radio" name="filter" value="habitaciones">Habitaciones
									</label>
									<label class="btn btn-dark">
										<input type="radio" name="filter" value="villa">Villa
									</label>
									<label class="btn btn-dark">
										<input type="radio" name="filter" value="weddings-events">Weddings & Events
									</label>
								</fieldset>
							</form>
						</div>
						<div class="row" id="mg-grid">
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/56B5959-2-752x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/56B5959-2-752x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/56B6254-903x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/56B6254-903x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/actividades-4-1024x630.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/actividades-4-1024x630.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/actividades-teck1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/actividades-teck1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/actividades-teck2-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/actividades-teck2-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/actividades-teck3-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/actividades-teck3-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/IMG_1730-1024x768.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/IMG_1730-1024x768.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/MG_2343-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/MG_2343-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/MG_2345-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/MG_2345-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/MG_5999-Pano-968x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/MG_5999-Pano-968x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/MGL5605-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/MGL5605-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/MGL5661-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/MGL5661-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/MGL5666-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/MGL5666-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/salon1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/salon1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/salon2-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/salon2-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/salon3-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/salon3-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/salon4-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/salon4-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/salon6-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/salon6-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/video-casamolle-actividades2-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/video-casamolle-actividades2-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/video-casamolle-actividades3-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/video-casamolle-actividades3-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/video-casamolle-actividades4-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/video-casamolle-actividades4-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;actividades&quot;]"><a href="assets/images/galeria-page/actividades/video-casamolle-actividades5-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/actividades/video-casamolle-actividades5-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/business-1-1024x517.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/business-1-1024x517.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/business-2-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/business-2-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/business-3-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/business-3-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/business-4-1024x530.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/business-4-1024x530.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/business-5-1024x492.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/business-5-1024x492.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/salon1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/salon1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/salon2-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/salon2-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/salon3-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/salon3-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/salon4-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/salon4-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/salon5-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/salon5-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/salon6-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/salon6-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/teck-gastronomia-1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/teck-gastronomia-1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/teck-gastronomia-2-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/teck-gastronomia-2-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/teck-gastronomia-3-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/teck-gastronomia-3-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]"><a href="assets/images/galeria-page/business & meetings/villa-teck11-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/business & meetings/villa-teck11-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5640-683x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5640-683x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5649-1024x922.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5649-1024x922.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5658-790x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5658-790x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5664-1024x665.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5664-1024x665.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5715-774x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5715-774x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5739-683x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5739-683x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5760-683x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5760-683x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5780-779x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5780-779x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B5904-821x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B5904-821x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/56B6694-734x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/56B6694-734x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/gastronomia-4-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/gastronomia-4-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/gastronomia-5-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/gastronomia-5-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/MGL5757-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/MGL5757-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/teck-gastronomia-1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/teck-gastronomia-1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/teck-gastronomia-2-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/teck-gastronomia-2-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/teck-gastronomia-3-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/teck-gastronomia-3-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/video-casamolle-gastronomia1-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/video-casamolle-gastronomia1-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/video-casamolle-gastronomia2-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/video-casamolle-gastronomia2-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.23.58k-1024x768.jpeg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.23.58k-1024x768.jpeg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.26.20n-1024x768.jpeg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.26.20n-1024x768.jpeg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.29.11c-768x1024.jpeg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.29.11c-768x1024.jpeg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.32.193-1024x768.jpeg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.32.193-1024x768.jpeg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.40.467-768x1024.jpeg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.40.467-768x1024.jpeg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.40.467-768x1024.jpeg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.40.467-768x1024.jpeg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.48.00-1024x768.jpeg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.48.00-1024x768.jpeg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;gastronomia&quot;]"><a href="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.50.32b-1024x768.jpeg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/gastronomia/WhatsApp-Image-2018-04-18-at-00.50.32b-1024x768.jpeg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/56B5859-1024x706.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/56B5859-1024x706.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/CANCHA-2-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/CANCHA-2-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/CANCHA-GOLF-CON-EFFECT-1024x768.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/CANCHA-GOLF-CON-EFFECT-1024x768.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/golf-teck1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/golf-teck1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/golf-teck2-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/golf-teck2-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/golf3-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/golf3-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/golf4-1024x682.jpg data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/golf4-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/golf5-1024x544.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/golf5-1024x544.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/golf6-1024x721.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/golf6-1024x721.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/golf7-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/golf7-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/MG_2311-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/MG_2311-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/MGL6128-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/MGL6128-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/video-casamolle-actividades1-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/video-casamolle-actividades1-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/video-casamolle-villa1-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/video-casamolle-villa1-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;golf&quot;]"><a href="assets/images/galeria-page/golf/villa-teck1-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/golf/villa-teck1-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/56B6421-1024x531.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/56B6421-1024x531.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion2-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion2-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion3-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion3-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion4-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion4-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion5-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion5-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion6-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion6-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion7-1024x574.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion7-1024x574.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion8-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion8-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/habitacion9-1024x650.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/habitacion9-1024x650.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/MG_2315-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/MG_2315-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/MG_2399-1024x673.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/MG_2399-1024x673.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/MG_2419-1024x768.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/MG_2419-1024x768.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/MG_2439-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/MG_2439-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;habitaciones&quot;]"><a href="assets/images/galeria-page/habitaciones/MG_2455-1024x650.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/habitaciones/MG_2455-1024x650.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5625-1024x745.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5625-1024x745.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5647-1024x702.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5647-1024x702.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5678-1024x564.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5678-1024x564.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5683-1024x579.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5683-1024x579.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5705-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5705-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5707-695x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5707-695x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5869-1024x406.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5869-1024x406.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5870-1024x629.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5870-1024x629.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5872-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5872-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5873-1024x694.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5873-1024x694.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B5920-1024x578.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B5920-1024x578.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6141-683x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6141-683x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6206-1024x694.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6206-1024x694.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6235-1024x710.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6235-1024x710.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6259-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6259-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6261-823x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6261-823x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6267-1024x601.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6267-1024x601.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6282-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6282-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6303-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6303-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6303-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6303-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6306-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6306-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6311-1024x676.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6311-1024x676.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6315-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6315-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/56B6679-683x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/56B6679-683x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/Amanecer-Casa-Molle-Retocada-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/Amanecer-Casa-Molle-Retocada-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/Amanecer-Casa-Molle-Retocada-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/Amanecer-Casa-Molle-Retocada-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/ANFITEATRO-2-1024x768.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/ANFITEATRO-2-1024x768.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/bar1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/bar1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/bar2-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/bar2-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/bar3-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/bar3-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/DJI_0062-1024x721.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/DJI_0062-1024x721.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2112-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2112-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2117-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2117-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2171-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2171-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2276-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2276-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2298-1024x755.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2298-1024x755.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2311-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2311-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2347-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2347-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2348-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2348-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2355-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2355-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2387-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2387-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2407-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2407-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2425-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2425-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2461-1024x717.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2461-1024x717.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2468-1024x745.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2468-1024x745.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2479-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2479-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2514-HDR-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2514-HDR-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2521-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2521-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MG_2527-HDR-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MG_2527-HDR-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MGL5577-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MGL5577-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MGL5581-1024x548.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MGL5581-1024x548.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/MGL5591-1024x685.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/MGL5591-1024x685.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/Q4A3390-690x1024.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/Q4A3390-690x1024.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/video-casamolle-villa1-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/video-casamolle-villa1-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/video-casamolle-villa1-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/video-casamolle-villa1-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-laguna1-1024x507.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-laguna1-1024x507.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck2-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck2-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck3-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck3-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck4-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck4-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck5-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck5-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck6-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck6-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck7-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck7-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck8-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck8-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck9-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck9-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa-teck10-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa-teck10-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa2-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa2-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa3-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa3-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa4-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa4-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;villa&quot;]"><a href="assets/images/galeria-page/villa/villa5-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/villa/villa5-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/business-1-1024x517.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/business-1-1024x517.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/business-2-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/business-2-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/business-3-1024x683.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/business-3-1024x683.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/business-4-1024x530.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/business-4-1024x530.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/salon5-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/salon5-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/business-5-1024x492.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/business-5-1024x492.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/salon1-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/salon1-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/salon2-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/salon2-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/salon3-1024x682.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/salon3-1024x682.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
							<figure class="col-lg-3 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]"><a href="assets/images/galeria-page/weddings events/weddings-events-11-1024x576.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets/images/galeria-page/weddings events/weddings-events-11-1024x576.jpg" alt=""/><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>

						</div>
					</div>
				</div>
			</div>
		</div>

	<?php require 'assets/partials/footer.php'?>
	
		<script src="assets/js/nav-menu.js"></script>
		
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