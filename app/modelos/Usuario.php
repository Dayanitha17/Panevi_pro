<?php

require_once '../config/config.php';

class Usuario
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = conectar();
    }

    public function registrar($nombre, $apellido, $email, $passwordEncriptado, $telefono, $direccion)
    {
        $sql = "INSERT INTO clientes (nombre, apellido, email, password, telefono, direccion) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ssssss", $nombre, $apellido, $email, $passwordEncriptado, $telefono, $direccion);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
