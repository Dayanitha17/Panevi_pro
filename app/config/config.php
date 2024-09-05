<?php

$Server = "localhost";
$user = "root";
$pass = "";
$db = "proyecto-pagina";

$conexion = new mysqli($Server, $user, $pass, $db);
if ($conexion->connect_errno) {
    echo "no se conecto <br>";
}

function conectar() {
    global $conexion;
    return $conexion;
}