<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destinatario = "reyespovedasebastian@gmail.com"; // Reemplaza con tu dirección de correo
    $asunto = "Nuevo mensaje de contacto";
    $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado. Gracias por contactarnos.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtelo de nuevo.";
    }
}

