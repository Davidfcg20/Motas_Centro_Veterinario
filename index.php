<!DOCTYPE html>
<html>
<head>

	<title>CENTRO VETERINARIO MOTAS</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >



	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	
</head>


	<?php  ?>

	<header id="Inicio">

	<!--- MENÚ--->

		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
			<img src="Imagenes/LogoPagina1.png">
			<a class="navbar-brand" href="#">Centro Veterinario Motas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto px-3">
					<li class="nav-item active px-3 border-right">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown px-3 border-right">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Consulta veterinaria</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Peluqueria</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Vacunas</a>
						</div>						
						<li class="nav-item px-3 border-right">
							<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Galeria</a>
						</li>
						<li class="nav-item dropdown px-3 border-right">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#QuienesSomos">¿Quienes somos?</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#Noticias">Noticias</a>
						</div>
						</li>
						<li class="nav-item px-3 border-right">
							<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contactanos</a>
						</li>
					</ul>
				</div>
			</nav>

	<!--- FIN MENÚ --->
			
	</header>

	<!--- CARRUSEL --->

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="Imagenes/Banner1.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="Imagenes/Banner2.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="Imagenes/Banner3.png" class="d-block w-100" alt="...">
				</div>
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

	<!--- FIN CARRUSEL --->

	<!--- DIV ESTETICO --->

		<div class="container-fluid bg-light">

	<!--- DIV ESTETICO --->

	<!--- SERVICIOS --->	

		<div id="Servicios" class="row bg-white">
			
			<div class="col jumbotron bg-white">

				<h3>CENTRO VETERINARIO MOTAS</h3>
				<h1 class="display-4">Nuestros Servicios</h1><br>		
				<p class="lead text-justify"> Una clínica veterinaria es una institución de servicios para la salud, principalmente para perros y gatos; sin embargo, se puede atender a todo tipo de animales, tanto domésticos como exóticos. El objetivo de estos centros médicos es preservar el bienestar de los animales. </p><br>
				<a class="btn btn-primary btn-lg" href="#" role="button">Contactanos</a>

			</div>

			<div class="col-md-7 bg-white">

				<div class="row bg-white my-2">

					<div class="card mx-5 my-2 bg-light" style="width: 18rem;">
						<img src="Imagenes/Banner1.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Consulta Médica</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					<div class="card mx-5 my-2 bg-light" style="width: 18rem;">
						<img src="Imagenes/Banner2.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Peluquería y Estetica</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
	
				</div>

				<div class="row bg-white">

					<div class="card mx-5 my-2 bg-light" style="width: 18rem;">
						<img src="Imagenes/Banner3.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Vacunación y Esterilización</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					<div class="card mx-5 my-2 bg-light" style="width: 18rem;">
						<img src="Imagenes/Banner1.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Cirugía</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					
				</div>

			</div>

		</div>

		<!--- FIN SERVICIOS --->


		<!--- ¿QUIENÉS SOMOS? --->

			<div id="QuienesSomos" class="container bg-light">

				<h2 class="display-4 text-center">¿Quiénes somos?</h2>

				<div class="row container-fluid" style="text-align: center;">
					<p>La Clínica Veterinaria MOTAS es una empresa dedicada al cuidado de las mascotas, que lleva en el mercado desde el año 2006, trabajando en pro del bienestar de cada mascota. Desde entonces, sus primordiales objetivos estuvieron encaminados a mejorar en todos sus servicios, y muchos de estos objetivos se han logrado, como la innovación de los equipos de diagnóstico, cirugía, y la adecuación de la infraestructura, dando como resultado el poder ofrecer a todos nuestros clientes un servicio integral atendidos por profesionales de altísima calidad, todo ésto con el fin de tratar nuestros pacientes como seres que merecen la mejor atención y especial cuidado.</p>
				</div>

				<div class="row">

					<div class="col-lg-6">
						<img src="Imagenes/Casa.png" class="img-fluid" alt="">
					</div>

					<div class="col-lg-6">

						<hr>

						<h3 class="display-5 px-auto text-justify">MISIÓN</h3>

						<p class="text-justify">La clínica veterinaria AQUAVET tiene como misión ofrecer bienestar a cada una de nuestras mascotas, que sus familias entiendan los deberes y los derechos que tienen las mascotas desde el instante que entran a formar parte de sus vidas. Nuestro grupo de trabajo comparte valores y principios éticos de respeto, responsabilidad y compromiso, superándolas expectativas de nuestros clientes y entregando calidad y satisfacción en nuestros servicios.</p>

						<hr>

						<h3 class="display-5 px-auto text-justify">VISIÓN</h3>

						<p class="text-justify">La clínica veterinaria AQUAVET tiene como visión ser una empresa sólida, líder en prestación de servicios médicos veterinarios de la mejor calidad y profesionalismo, con énfasis en animales de compañía. Nuestro compromiso social es mejorar la calidad de vida de las familias a través del cuidado de la salud de nuestros pacientes contando con excelente tecnología, un equipo médico altamente calificado con educación y capacidad continua.</p>

						<hr>

					</div>

				</div>

			</div>

		<!--- FIN ¿QUIENÉS SOMOS? --->

		<!--- FIN DIV ESTETICO --->

		</div>

		<!--- FIN DIV ESTETICO --->


		<!--- DIV ESTETICO --->

		<div class="container-fluid bg-white">

		<!--- DIV ESTETICO --->

		<!--- NOTICIAS --->

			<div id="Noticias" class="container bg-white pt-3">

				<h2 class="pb-2" style="text-align: center;">Noticias</h2>

				<div class="row">
					<div class="col-lg-4 order-2 order-lg-1" data-aos="fade-right">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FP%25C3%25A1gina-de-adopci%25C3%25B3n-perros-y-gatos-312796346252551%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>

					<div class="col-lg-4 order-2 order-lg-1" data-aos="fade-right">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcachorrosmedellin.dogscan%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>

					<div class="col-lg-4 order-2 order-lg-1" data-aos="fade-right">
						<blockquote class="twitter-tweet"><p lang="es" dir="ltr">La FAO identifica lagunas de conocimiento sobre Covid-19 y animales <a href="https://t.co/klQPIunUQD">https://t.co/klQPIunUQD</a></p>&mdash; Animal&#39;s Health (@animalshealthes) <a href="https://twitter.com/animalshealthes/status/1286321435909197826?ref_src=twsrc%5Etfw">July 23, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>

				</div>

			</div><br>


		<!--- FIN NOTICIAS --->

		<!--- CITA --->

			<div id="Cita" class="container bg-light">

				<h2 class="py-3">Haga una Cita</h2>
						
