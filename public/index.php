<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="img/logo_nav (1).png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style11.css" rel="stylesheet">
	<title>PANEVI</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
		<div class="container-logo"> <!-- Contenedor para el logo y el nombre de la empresa -->

			<div class="header-images"> <!-- Contenedor para las imágenes de las letras de la empresa -->
				<img src="img/logo_nav (1).png " id="logo"> <!-- Muestra la imagen del logo -->
				<img src="img/P.PNG" alt="Imagen 1">
				<img src="img/A.png" alt="Imagen 1">
				<img src="img/N.png" alt="Imagen 1">
				<img src="img/E.png" alt="Imagen 1">
				<img src="img/V.png" alt="Imagen 1">
				<img src="img/I.png" alt="Imagen 1">
			</div>
		</div>


		<div class="container">

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
				aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<div class="busqueda">
						<input type="text" id="bus" placeholder="Buscar">
						<div class="buttonb">
							<i class="fa fa-search"></i>
						</div>
					</div>
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio</a>
					</li>
					<li><a style="text-align: center" class="nav-link" href="login.php">Ingresar</a></li>
					<li><a class="nav-link" href="registro.php">Registrarse</a></li>
					<li><a class="nav-link" href="productos.php">Productos</a></li>


				</ul>


			</div>
		</div>

	</nav>

	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->

	<section id="containe"> <!-- Sección que contiene un carrusel de imágenes -->
		<div class="containerr">
			<div class="slide"> <!-- Contenedor del carrusel -->

				<div class="item" style="background-image: url('img/imagen66.jpg');">
					<!-- Cada elemento del carrusel -->
					<div class="content">
						<div class="name">Información de contacto</div>
						<br>
						<div class="des">Enlaces a redes sociales</div>
						<br>
						<button id="buttoncate">Ver más</button>
					</div>
					<!-- Más elementos del carrusel -->
				</div>
				<div class="item" style="background-image: url('img/imagen1.jpg')">
					<div class="content">
						<div class="name">Introducción al producto principal</div>
						<div class="des">Descripción breve de la panela</div>
						<a href="Proceso.html">
						<button id="buttoncate">Ver más</button></a>
					</div>
				</div>
				<div class="item" style="background-image: url('img/imagen22.png');">
					<div class="content">
						<div class="name">Proceso de producción sostenible</div>
						<div class="des">Impacto positivo en las comunidades locales</div>
						<button id="buttoncate">Ver más</button>
					</div>
				</div>
				<div class="item" style="background-image: url('img/imagen33.jpg');">
					<div class="content">
						<div class="name">Variedades de panela y derivados</div>
						<div class="des">Diferentes tipos y presentaciones de panela</div>
						<a href="Productos.html">
						<button id="buttoncate">Ver más</button></a>
					</div>
				</div>
				<div class="item" style="background-image: url('img/imagen44.jpg');">
					<div class="content">
						<div class="name">Cultura y tradición</div>
						<div class="des">Fiestas o celebraciones donde la panela es protagonista</div>
						<button id="buttoncate">Ver más</button>
					</div>
				</div>
				<div class="item" style="background-image: url('img/imagen55.jpeg')">
					<div class="content">
						<div class="name">Información de contacto</div>
						<div class="des">Enlaces a redes sociales</div>
						<button id="buttoncate">Ver más</button>
					</div>
				</div>
			</div>

			<div class="button"> <!-- Botones de navegación del carrusel -->
				<button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
				<button class="next"><i class="fa-solid fa-arrow-right"></i></button>
			</div>
			<script src="js/index_animaciones.js"></script> <!-- Enlaza un script JavaScript externo -->
		</div>
	</section>


<!--<div class="rectangle"></div>-->

	<!-- End Hero Section -->


	<!-- Start We Help Section -->
	<div class="we-help-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 mb-5 mb-lg-0">
					<div class="imgs-grid">
						<div class="grid grid-1"><img src="img/c1 (1).jpeg" alt="Untree.co"></div>
						<div class="grid grid-2"><img src="img/c1 (2).jpeg" alt="Untree.co"></div>
						<div class="grid grid-3"><img src="img/c1 (3).jpeg" alt="Untree.co"></div>
					</div>
				</div>

				<div class="col-lg-5 ps-lg-5">
					<br>
					<h2 class="section-title mb-4">SOBRE NOSOTROS</h2>
					<div class="fondo">
						<p>En Panevi, somos apasionados por la panela de alta calidad. Fundada con el objetivo de
							rescatar y promover la tradición de la producción de panela en nuestra región, nos dedicamos
							a ofrecer un producto natural, saludable y lleno de sabor.</p>

						<br>
					</div>
					<ul class="list-unstyled custom-list my-1">
						<li>Nuestra panela se elabora de manera artesanal.</li>
						<li>Creemos firmemente en la importancia de apoyar a los agricultores locales</li> <br><br>
						<li>En Panevi, no solo nos enfocamos en la calidad de nuestros productos.</li>
						<li>Es un endulzante natural. rico en nutrientes y perfecto.</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
	<!-- End We Help Section -->



	<br><br>
	<!-- Seccion de Categorias -->

	<section class="container top-categories" style="background-color: white;">
		
			<h1 class="heading">Consulta nuestros Árticulos</h1>
		
		<br>
		<div class="container-categories">
			<div class="card-category category-propiedades "style="background-image: url('img/imagen4 - copia.jpg');">

				<p>Propiedades</p>
				<span>Ver más</span>
			</div>
			<!-- Más categorías -->
			<div class="card-category category-beneficios" style="background-image: url('img/bene.jpg');">

				<p>Beneficios</p>
				<span>Ver más</span>
			</div>
			<div class="card-category category-nutricional" style="background-image: url('img/valo.png');">
				<p>Valor Nutricional</p>
				<span>Ver más</span>
			</div>
		</div>
	</section>
	<!-- Seccion de Categorias -->


	<!-- Quienes somos  Section 
	<div class="why-choose-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<h2 class="section-title">QUIENES SOMOS</h2>


					
					<br>
					<p>En Panevi, somos apasionados por la panela de alta calidad. Fundada con el objetivo de rescatar y
						promover la tradición de la producción de panela en nuestra región, nos dedicamos a ofrecer un
						producto natural, saludable y lleno de sabor. </p>

					<div class="row my-5">
						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">

								</div>
								<h3>Fast &amp; Free Shipping</h3>
								<p>Nuestra panela se elabora de manera artesanal, utilizando caña de azúcar seleccionada
									y procesos sostenibles que preservan el medio ambiente.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">

								</div>
								<h3>Easy to Shop</h3>
								<p>Creemos firmemente en la importancia de apoyar a los agricultores locales</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">

								</div>
								<h3>24/7 Support</h3>
								<p>En Panevi, no solo nos enfocamos en la calidad de nuestros productos, sino también en
									educar a nuestros consumidores sobre los beneficios de la panela</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">

								</div>
								<h3>Hassle Free Returns</h3>
								<p>Es un endulzante natural, rico en nutrientes y perfecto para una alimentación
									equilibrada. </p>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-5">
					<div class="img-wrap">
						<img src="images/quien_somos.jpeg" alt="Image" class="img-fluid">
					</div>
				</div>

			</div>
		</div>
	</div>
	 Quienes Somos Section -->



<br>


	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">

			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">PANEVI<span></span></a></div>
					<p class="mb-4"></p>

					<ul class="list-unstyled custom-social">
						<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
					</ul>
				</div>

				<div class="col-lg-8">
					<div class="row links-wrap">
						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">About us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Support</a></li>
								<li><a href="#">Knowledge base</a></li>
								<li><a href="#">Live chat</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Our team</a></li>
								<li><a href="#">Leadership</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Nordic Chair</a></li>
								<li><a href="#">Kruzo Aero</a></li>
								<li><a href="#">Ergonomic Chair</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Copyright &copy;
							<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;
							Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a
								hreff="https://themewagon.com">ThemeWagon</a>
							<!-- License information: https://untree.co/license/ -->
						</p>
					</div>

					<div class="col-lg-6 text-center text-lg-end">
						<ul class="list-unstyled d-inline-flex ms-auto">
							<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</footer>
	<!-- End Footer Section -->


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>