<?php
$area = $_POST['area'];
$name = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$message = $_POST['mensaje'];
$formcontent="De: <strong>$name</strong><br>";
$formcontent .="Area: <strong>$area</strong><br>";
$formcontent .="Telefono: <strong>$telefono</strong><br>";
$formcontent .="Mensaje: <strong>$message</strong><br><br><br>";
$formcontent .="<small>Contacto recibido desde el formulario de contacto del sitio de www.QuimicaYa.com.ar</small>";
$recipient = "comercial@quimicaya.com.ar";
$subject = "$asunto - Quimica Ya!";
$mailheader = "From: $recipient \r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mailheader .= "Content-Type: text/html; charset=UTF-8\r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: contacto_gracias.html');
exit();
?>