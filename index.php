<!DOCTYPE html>
<html>
<head>

	<title>CENTRO VETERINARIO MOTAS</title>

	<link rel="stylesheet" href="css/estilos.css" >

	<link rel="stylesheet" href="css/bootstrap.min.css" >

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
							<a class="dropdown-item" href="#Serv1">Consulta Medica</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#Serv2">Peluqueria y Estetica</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#Serv3">Vacunación y Esterilización</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#Serv4">Cirugía</a>
						</div>				
						<li class="nav-item px-3 border-right">
							<a class="nav-link" href="#Galeria" tabindex="-1" aria-disabled="true">Galeria</a>
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
							<a class="nav-link" href="#Contactanos" tabindex="-1" aria-disabled="true">Contactanos</a>
						</li>
					</ul>
				</div>
			</nav>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
			
			<div id="Estilo09" class="col jumbotron bg-white">

				<h3>CENTRO VETERINARIO MOTAS</h3>
				<h1 class="display-4">Nuestros Servicios</h1><br>		
				<p class="lead text-justify"> Una clínica veterinaria es una institución de servicios para la salud, principalmente para perros y gatos; sin embargo, se puede atender a todo tipo de animales, tanto domésticos como exóticos. El objetivo de estos centros médicos es preservar el bienestar de los animales. </p><br>
				<button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#exampleModalCenter">
                Contactanos
                </button>


			</div>

			<div class="col-md-7 bg-white">

				<div class="row bg-white my-2">

					<div id="Serv1" class="card mx-5 my-2 bg-light" style="width: 18rem;">
						<img src="Imagenes/Banner1.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Consulta Médica</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					<div id="Serv2" class="card mx-5 my-2 bg-light" style="width: 18rem;">
						<img src="Imagenes/Banner2.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Peluquería y Estetica</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
	
				</div>

				<div class="row bg-white">

					<div id="Serv3" class="card mx-5 my-2 bg-light" style="width: 18rem;">
						<img src="Imagenes/Banner3.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Vacunación y Esterilización</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					<div id="Serv4" class="card mx-5 my-2 bg-light" style="width: 18rem;">
						<img src="Imagenes/Banner1.png" class="card-img-top" alt="...">
						<div  class="card-body">
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

						<div id="Estilo01">

						<hr>

						<h3 class="display-5 px-auto text-justify">MISIÓN</h3>

						<p class="text-justify">La clínica veterinaria AQUAVET tiene como misión ofrecer bienestar a cada una de nuestras mascotas, que sus familias entiendan los deberes y los derechos que tienen las mascotas desde el instante que entran a formar parte de sus vidas. Nuestro grupo de trabajo comparte valores y principios éticos de respeto, responsabilidad y compromiso, superándolas expectativas de nuestros clientes y entregando calidad y satisfacción en nuestros servicios.</p>

						</div>

						<div id="Estilo08">

						<hr>

						<h3 class="display-5 px-auto text-justify">VISIÓN</h3>

						<p class="text-justify">La clínica veterinaria AQUAVET tiene como visión ser una empresa sólida, líder en prestación de servicios médicos veterinarios de la mejor calidad y profesionalismo, con énfasis en animales de compañía. Nuestro compromiso social es mejorar la calidad de vida de las familias a través del cuidado de la salud de nuestros pacientes contando con excelente tecnología, un equipo médico altamente calificado con educación y capacidad continua.</p>

						</div>

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

				<button id="Estilo06" type="button" class="btn btn-outline-primary">Mostrar</button>

				<button id="Estilo07" type="button" class="btn btn-outline-primary">Ocultar</button>

				<div id="NotiMO">

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

				</div>

			</div><br>


		<!--- FIN NOTICIAS --->

		<!--- CITA --->

		
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Haga una cita</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						
							<div id="Cita" class="container bg-light">

								<form>

									<div class="form-row">
										<div class="col-md-4 form-group">
											<input id="nombre" type="text" name="name" class="form-control"  placeholder=Nombre data-rule="minlen:4" data-msg="Por favor Escriba al menos 4 caracteres">
											<div class="validate"></div>
										</div>

										<div class="col-md-4 form-group">
											<input id="email" type="email" class="form-control" name="email"  placeholder="Su correo electrónico" data-rule="email" data-msg="Por favor ingrese un correo valido">
											<div class="validate"></div>
										</div>

										<div class="col-md-4 form-group">
											<input id="tel" type="number" class="form-control" name="phone" placeholder="Su teléfono" data-rule="minlen:4" data-msg="Por favor Escriba al menos 4 caracteres">
											<div class="validate"></div>
										</div>

									</div>

									<div class="form-row">

										<div class="col-md-4 form-group">
											<input id="fecha" type="datetime" name="date" class="form-control datepicker"  placeholder="Dia de la cita" minlength="2" >

											<select id="categoria" class="form-control" >
				
												<option value='/10/2020'> Octubre</option>
												<option value='/11/2020'> Noviembre</option>
												<option value='/12/2020'> Diciembre</option>
											</select>

											<div class="validate"></div>
										</div>

									</div>

									<div class="form-group">
										<textarea id="msj" class="form-control" name="message" rows="5" placeholder="Mensaje (Opcional)"></textarea>
										<div class="validate"></div>
									</div>

								</form>

							</div><br>	


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button id="enviar" type="button" class="btn btn-primary">Enviar</button>
						</div>
					</div>
				</div>
			</div>

			

		<!--- FIN CITA --->

		<!--- FIN DIV ESTETICO --->

		</div>

		<!--- FIN DIV ESTETICO --->

		<!--- DIV ESTETICO --->

		<div class="container-fluid bg-light">

		<!--- DIV ESTETICO --->


		<!--- GALERIA --->

		<div  id="Galeria" class="container-fluid bg-light ml-2" style="align-content: center; text-align: center;">

			<h2 class="py-1">Galeria</h2>

			<div class="row ">

			<div class="card ml-4 my-2" style="width: 18rem;">
				<img src="Imagenes/Galeria1.png" id="Estilo02" >
			</div>

			<div class="card ml-4 my-2" style="width: 18rem;">
				<img src="Imagenes/Galeria2.png" id="Estilo03" >
			</div>

			<div class="card ml-4 my-2" style="width: 18rem;">
				<img src="Imagenes/Galeria3.png" id="Estilo04" >
			</div>

			<div class="card ml-4 my-2" style="width: 18rem;">
				<img src="Imagenes/Galeria4.png" id="Estilo05" >
			</div>

			</div>


		</div>

		<!--- FIN GALERIA --->

		<!--- FIN DIV ESTETICO --->

		</div>

		<!--- FIN DIV ESTETICO --->


		<!--- DIV ESTETICO --->

		<div class="container-fluid bg-white">

		<!--- DIV ESTETICO --->

		<!--- CONTACTANOS --->

			<div id="Contactanos" class="container">

			<h2 style="text-align: center;">Contactanos</h2>

			</div>

		<!--- FIN DIV ESTETICO --->

		</div>

		<!--- FIN DIV ESTETICO --->

			<div>


        <iframe style="border: 0; width: 100%; height: 350px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126932.64524225508!2d-75.6665754!3d6.1782303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfce1c578df4cc43e!2sMotas%20Centro%20Veterinario!5e0!3m2!1ses!2sco!4v1606293244755!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

			</div>

			<!--- DIV ESTETICO --->

			<div class="container">

				<div class="row mt-5">

					<div class="col-lg-6">

						<div class="row">
							<div class="col-md-12">
								<div class="info-box">
									<i class="bx bx-map"></i>
									<h3>Nuestra Dirección</h3>
									<p>Calle 66 # 44B - Itagüi - Antioquia</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box mt-4">
									<i class="bx bx-envelope"></i>
									<h3>Escribenos </h3>
									<p>info@ejemplo.com<br>contactanos@correo.com</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box mt-4">
									<i class="bx bx-phone-call"></i>
									<h3>Llamanos</h3>
									<p>+57 281 15 70<br> +57 281 15 70</p>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

	<!-- ======= Pie de pagina ======= -->

	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6">
						<div class="footer-info">
							<h3>Motas</h3>
							<p>
								Calle 66 # 44B <br>
								Itagüi - Antioquia, Colombia<br><br>
								<strong>Telefono:</strong> 281 15 70<br>
								<strong>Email:</strong> info@correo.com<br>
							</p>
							<div class="social-links mt-3">
								<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
								<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
								<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Enlaces Utiles</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#Servicios">Servicios</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#QuienesSomos">¿Quienes Somos?</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#Noticias">Noticias</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#Galeria">Galeria</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#Contactanos">Contactanos</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

	</footer><!-- Fin pie de pagina -->

	<div class="fixed-bottom mb-3 mr-3"><a href="#Inicio">
		<button type="button" class="btn btn-secondary float-right"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/></svg></button></a>
	</div>

  	<!--- FOOTER --->

  	<script type="text/javascript" src="js/script.js"></script>

  	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>

</html>
						
