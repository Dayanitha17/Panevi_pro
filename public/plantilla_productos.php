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
	<script src="js/app.js" async></script>
	<title>Productos</title>
</head>
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
        <a href="checkout.html"><button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i></button></a>
    </div>
</div>
</section>
<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
