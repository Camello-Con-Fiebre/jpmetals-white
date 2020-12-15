<?php
if(isset($_POST['email'])) {


$email_to = "clientes@jpmetals.cl";
$nombre = $_POST['name'];
$email_from = $_POST['email'];
$email_subject = $_POST['subject'];
$mensaje = $_POST['message'];



if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['subject']) ||
!isset($_POST['message'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$headers = 'From' . " " . $email_from . "\r\n".
'X-Mailer: PHP/' . phpversion();

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Asunto: " . $_POST['subject'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] . "\n\n";



mail($email_to, $email_subject, $email_message,$headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>