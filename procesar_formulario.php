<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@codeenchanters.com';
        $mail->Password = 'Code1234?.';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Puedes cambiar a ENCRYPTION_SMTPS si tu servidor SMTP requiere SSL
        $mail->Port = 587; // Ajusta el puerto según la configuración de tu servidor SMTP

        // Configuración del correo
        $mail->setFrom('info@codeenchanters.com', $nombre);
        $mail->addAddress('info@codeenchanters.com', 'Info');

        // Contenido del correo
        $mail->isHTML(false);
        $mail->Subject = 'Nuevo mensaje de contacto';
        $mail->Body = "Nombre: $nombre\nCorreo electrónico: $email\nMensaje:\n$mensaje";

        $mail->send();

        // Puedes redirigir a una página de "gracias" o mostrar un mensaje de éxito aquí
        header("Location:index.php");
        exit();
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}
?>