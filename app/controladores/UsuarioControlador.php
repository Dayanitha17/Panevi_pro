<?php

require_once '../config/config.php';
require_once '../modelos/Usuario.php';

class UsuarioControlador
{
    private $usuarioModelo;

    public function __construct()
    {
        $this->usuarioModelo = new Usuario();
    }

    public function registrar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];


            if ($this->usuarioModelo->registrar($nombre, $apellido, $email, $password, $telefono, $direccion)) {
                header('Location: ../../public/login.php');
            } else {
                die('Error al registrar el usuario');
            }
        }
    }
}

$controlador = new UsuarioControlador();
$controlador->registrar();
