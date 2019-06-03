<!DOCTYPE html>
<html lang="en">

<title>Experiencias | Casa Molle Villa & Golf</title>
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
					<div class="imglogo-banner">
						<a href="index.php"><img id="imglogo" src="assets/images/Logo_Casa_molle.png" alt=""></a>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="mg-page-title main-img-great-moment" style="padding-bottom: 200px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- <h2>Great Moment</h2> -->
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 id="title-main-landing">Lorem Ipsum</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="text-bottom-main-landing">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum esse laborum inventore iure eum explicabo adipisci magni ipsam culpa assumenda laudantium rem sapiente, alias amet repudiandae? Ea cum voluptatum aspernatur?</p>
			</div>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mg-filter">
					<form id="mg-filter">
						<fieldset>
							<label class="btn btn-dark">
								<input type="radio" name="filter" value="great-moment">Great Moment
							</label>
							<label class="btn btn-dark">
								<input type="radio" name="filter" value="big-family" >Big Family
							</label>
							<label class="btn btn-dark">
								<input type="radio" name="filter" value="business-meetings"checked="checked">Business & Meetings
							</label>
							<label class="btn btn-dark">
								<input type="radio" name="filter" value="weddings-events">Weddings & Events
							</label>
						</fieldset>
					</form>
				</div>
				<div class="row" id="mg-grid">
					<div class="col-md-12 mg-gallery-item" data-groups="[&quot;great-moment&quot;]">
						<div class="row">
							<div class="col-md-6">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (1).png" alt="img1">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (2).png" alt="img2">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (3).png" alt="img3">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (4).png" alt="img4">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (5).png" alt="img5">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (6).png" alt="img6">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (7).png" alt="img7">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (8).png" alt="img8">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (9).png" alt="img9">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (10).png" alt="img10">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/great-moment/Great_Moment (11).png" alt="img11">
										</div>

										<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<p>Pensado para los que quieran disfrutar junto a los suyos, compartiendo la villa con otros huéspedes.</p>
								<p><strong>Estadía en CasaMolle Villa & Golf.Check In: </strong> </p>
								<p>Desde las 15.00 hrs – check out: 11.00 hrs.</p>
								<p>Acceso a todas las áreas de la villa y sus actividades:</p>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fp-ht-golf "></i>
										<h3 style="font-size:12px;">Cancha golf de 9 hoyos</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fp-ht-swimmingpool"></i>
										<h3 style="font-size:12px">Piscina aire libre</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fas fa-hot-tub"></i>
										<h3 style="font-size:12px">Hot Tub & Sauna</h3>
									</div>
								</div>
							</div>


							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fp-ht-bowling"></i>
										<h3 style="font-size:12px">Área de bowls</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fas fa-futbol"></i>
										<h3 style="font-size:12px">Área de babyfootball</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fas fa-tint"></i>
										<h3 style="font-size:12px">Lagunas</h3>
									</div>
								</div>
							</div>


							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fas fa-arrows-alt-v"></i>
										<h3 style="font-size:12px">Paseos en Kayak</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fa fa-leaf"></i>
										<h3 style="font-size:12px">Huerta orgánica</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fas fa-horse"></i>
										<h3 style="font-size:12px">Cabalgatas guiadas</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fa fa-walking"></i>
										<h3 style="font-size:12px">Trekking</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fas fa-table-tennis"></i>
										<h3 style="font-size:12px">Circuito deportivo al aire libre</h3>
									</div>
								</div>
							</div>

							<div class="col-sm-2">
								<div class="mg-feature">
									<div class="mg-feature-icon-title"><i class="fas fa-theater-masks"></i>
										<h3 style="font-size:12px">Anfiteatro</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 mg-gallery-item" data-groups="[&quot;big-family&quot;]">
						<div class="row">
							<div class="col-md-6">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (1).png" alt="img1">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (2).png" alt="img2">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (3).png" alt="img3">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (4).png" alt="img4">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (5).png" alt="img5">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (6).png" alt="img6">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (7).png" alt="img7">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (8).png" alt="img8">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (9).png" alt="img9">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/big-family/Big_Family (10).png" alt="img10">
										</div>

										<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<p style="text-align:justify;">Inolvidable experiencia para tu familia. Aquí se comparten momentos memorables de entretención, conversación y actividades familiares. Organizamos grupos para generar entretenidas dinámicas de juegos de salón, deportivas, karaoke, golf y mucho más. Nietos con abuelos, padres con hijos o sobrinos, mamá e hijas en una experiencia muy enriquecedora.Una gran familia tiene grandes personajes, ven y descubre lo mejor de cada uno de ellos.
									Consulte por las cortesías asociadas a este programa.</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 mg-gallery-item" data-groups="[&quot;business-meetings&quot;]">
						<div class="row">
							<div class="col-md-6">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (1).png" alt="img1">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (2).png" alt="img2">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (3).png" alt="img3">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (4).png" alt="img4">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (5).png" alt="img5">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (6).png" alt="img6">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (7).png" alt="img7">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (8).png" alt="img8">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (9).png" alt="img9">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/images/galeria-interna/bussines-meetings/Business_Meetings (10).png" alt="img10">
										</div>

										<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<p style="text-align:justify;">Realiza reuniones de trabajo, directorios, conferencias, lanzamientos de marca, Team building, inauguraciones y todo tipo de evento para tu empresa. Nos encargamos de la producción del evento, del viaje, de las acreditaciones, de ofrecer las actividades más diversas y entretenidas a su medida, con shows o expositores. Nuestro variado y sorprendente paisaje es óptimo también para producciones fotográficas o fílmicas.
								Disponemos de 2 espectaculares salones:
								Salón Directorio:Con capacidad para 12 personas y situado junto a la laguna principal, completamente vidreado. Disfruta de un ambiente único donde pensar y crear jamás fue tan agradable y productivo.
								Salón Tikai Titi:Con capacidad para 170 personas, este salón es sorprendente. Inserto en un ambiente climatizado y con vista a la cancha de golf. Te sorprenderán las plantas y flores en su máximo esplendor.
								Consulte por las cortesías asociadas a este programa. </p>
							</div>
						</div>
					</div>
					<div class="col-md-12 mg-gallery-item" data-groups="[&quot;weddings-events&quot;]">
						<div class="row">
							<div class="col-md-6">
								<div class="video-responsive">
									<iframe width="500" height="281" src="https://www.youtube.com/embed/t3VsG0oH178" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-md-6">
								<p style="text-align:justify;">Casamolle Villa es el lugar soñado para celebrar matrimonios. Su entorno invita a conmemorar aniversarios o a disfrutar de cumpleaños. Nuestro equipo se encarga de organizar hasta el más mínimo detalle para que cada celebración sea memorable.
								Nuestra propuesta va mucho más allá de una fiesta; es toda una experiencia para compartir con los que más quieres. Consulte por las cortesías asociadas a este programa.</p>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-6">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (1).png" alt="img1">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (2).png" alt="img2">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (3).png" alt="img3">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (4).png" alt="img4">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (5).png" alt="img5">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (6).png" alt="img6">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (7).png" alt="img7">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (8).png" alt="img8">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (9).png" alt="img9">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="assets/images/galeria-interna/weddings/Wedding_Events (10).png" alt="img10">
									</div>

									<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<?php require 'assets/partials/section-banner-rrss.php' ?>
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