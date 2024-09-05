<?php
session_start();
if (!empty($_POST['btningresar'])) {
    if (empty($_POST['email']) and empty($_POST['password'])) {
        echo '<div style="color: grey; font-weight: bold; padding: 10px; border: 1px solid grey; border-radius: 5px; background-color: #f2f2f2; font-size: 14px;">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $password1 = $_POST['password'];

        $sql = $conexion->query("SELECT * FROM administradores WHERE email='$email' AND password='$password1'");
        if ($sql->num_rows > 0) {
            $datos = $sql->fetch_object();
            $_SESSION['nombre'] = $datos->nombre;
            $_SESSION['apellido'] = $datos->apellido;
            $_SESSION['tipo_usuario'] = 'administrador';
            header("Location: ../public/perfil_admin.php");
            exit();
        } else {
            $sql = $conexion->query("SELECT * FROM clientes WHERE email='$email'");
            if ($sql->num_rows > 0) {
                $sql = $conexion->query("SELECT * FROM clientes WHERE email='$email' AND password='$password'");
                if ($datos = $sql->fetch_object()) {
                    $_SESSION['nombre'] = $datos->nombre;
                    $_SESSION['apellido'] = $datos->apellido;
                    header("Location: ../public/perfil_cli.php");
                    exit();
                } else {
                    echo '<div style="color: red; font-weight: bold; padding: 10px; border: 1px solid red; border-radius: 5px; background-color: #f8d7da; font-size: 14px;">DATOS INCORRECTOS O INVÁLIDOS</div>';
                }
            } else {
                echo '<div style="color: red; font-weight: bold; padding: 10px; border: 1px solid red; border-radius: 5px; background-color: #f8d7da; font-size: 14px;">DATOS INCORRECTOS O INVÁLIDOS</div>';
            }
        }
    }
}