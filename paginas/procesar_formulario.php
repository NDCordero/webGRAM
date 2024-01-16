<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Cambia esta dirección de correo electrónico a la tuya
    $destinatario = "nicocordero@gmail.com";
    $asunto = "Nuevo mensaje de formulario de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Puedes personalizar las cabeceras según tus necesidades
    $cabeceras = "From: $email";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $contenido, $cabeceras);

    // Redirige al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>
