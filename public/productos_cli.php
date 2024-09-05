<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php
session_start();
if (!isset($_SESSION['nombre']) || !isset($_SESSION['apellido'])) {
	header("Location: login.php");
	exit();
}
?>
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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style11.css" rel="stylesheet">
	<script src="js/app2.js" async></script>
	<title>Productos</title>
</head>

<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<!-- JavaScript de Bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<!-- Start Header/Navigation -->
	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
		<div class="container-logo"> <!-- Contenedor para el logo y el nombre de la empresa -->

			<div class="header-images"> <!-- Contenedor para las imágenes de las letras de la empresa -->
				<div style="display: flex; align-items: center; color: white; text-align: center; margin-right: 5px;">
					<span style="font-weight: bold; font-size: 17px; margin-right: 10px;">
						<?php echo htmlspecialchars($_SESSION['nombre'] . ' ' . $_SESSION['apellido']); ?>
					</span>
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
							style="background: none; border: none; color: white;">
							<i class="fa fa-bars"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size: 13px">
							<a class="dropdown-item" href="ver_perfil.php" style="color: grey; font-weight: bold;">
								<i class="fa fa-user"></i> Ver Perfil
							</a>
							<a class="dropdown-item" href="configuraciones.php" style="color: grey; font-weight: bold;">
								<i class="fa fa-cog"></i> Configuraciones
							</a>
							<a class="dropdown-item" href="ayuda.php" style="color: grey; font-weight: bold;">
								<i class="fa fa-question-circle"></i> Ayuda
							</a>
							<div class="dropdown-divider" style="border-top: 1px solid #6c757d;"></div>
							<a class="dropdown-item" href="cambiar_contrasena.php"
								style="color: grey; font-weight: bold;">
								<i class="fa fa-key"></i> Cambiar Contraseña
							</a>
							<a class="dropdown-item" href="logout.php" style="color: grey; font-weight: bold;">
								<i class="fa fa-sign-out-alt"></i> Cerrar Sesión
							</a>
						</div>
					</div>
				</div>
				<img src="img/logo_nav (1).png" id="logo"> <!-- Muestra la imagen del logo -->
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
					<li>
						<a class="nav-link" href="perfil_cli.php">Inicio</a>
					</li>
					<li><a style="text-align: center;" class="nav-link" href="registro.php">¿Quienes Somos?</a></li>
					<li class="nav-item active"><a class="nav-link" href="productos_cli.php">Productos</a></li>


				</ul>


			</div>
		</div>

	</nav>

	<!-- End Header/Navigation -->

	<body>

		<section class="contenedor">
			<div class="contenedor-items">
				<?php
				include("../app/config/config.php");

				$tab_sql = "SELECT id_producto, nombre, precio, imagen FROM productos";
				$result = $conexion->query($tab_sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "<div class='item'>";
						echo "<span class='titulo-item'>" . $row["nombre"] . "</span>";
						echo "<img src='" . $row["imagen"] . "' alt='" . $row["nombre"] . "' class='img-item'>";
						echo "<span class='precio-item'>$" . $row["precio"] . "</span>";
						echo "<button class='boton-item' onclick='addToCart(" . $row["id_producto"] . ")'>Agregar al Carrito</button>";
						echo "</div>";
					}
				}
				?>
			</div>

			<!-- Carrito de Compras -->
			<div class="carrito" id="carrito">
				<div class="header-carrito">
					<h2>Tu Carrito</h2>
				</div>
				<div class="carrito-items"></div>
				<div class="carrito-total">
					<div class="fila">
						<strong>Tu Total</strong>
						<span class="carrito-precio-total">$0.00</span>
					</div>
					<button class="btn-pagar" onclick="submitCarrito()">Pagar <i
							class="fa-solid fa-bag-shopping"></i></button>
				</div>
			</div>
		</section>

	</body>



	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">


			<div class="row">
				<div class="col-lg-8">

				</div>
			</div>

			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
					<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus
						malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
						Pellentesque habitant</p>

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
								href="https://themewagon.com">ThemeWagon</a>
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