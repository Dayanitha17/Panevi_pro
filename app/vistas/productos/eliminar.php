<?php
include("../../config/config.php");

if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];
    $sql = "DELETE FROM productos WHERE id_producto = $id_producto";

    if ($conexion->query($sql) === TRUE) {
        header("Location: ../../../public/perfil_admin.php");
    } else {
        echo "Error eliminando el producto: " . $conexion->error;
    }
}