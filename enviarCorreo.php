<?php

require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.phpmaileroauth.php';
require 'PHPMailer/class.smtp.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$correo = $_REQUEST['correo'];
$nombre = $_REQUEST['nombre'];
$clave = $_REQUEST['clave'];

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // Esto cambia dependiendo del correo que utilicemos
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'raul.strappa94@gmail.cl';                 // correo con el que mandaremos el mail
$mail->Password = 'v m n t x ';                           // contrasĂ±a del correo
$mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                               // TCP port to connect to

$mail->setFrom('raul.strappa94@gmail.cl');		//nombre de quien manda el correo
$mail->addAddress($correo);  	// nombre de quien lo recive

$mail->Subject = "Bienvenido a nuestra comunidad Awake";				//asunto del correo
$mail->Body    = "Hola ".$nombre." por favor ingrese a nuestro sitio e ingrese con su rut y su contraseña que es ".$clave; //cuerpo del correo

$mail->SMTPOptions = array(
'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
));

if(!$mail->send()) {

    echo $mail->ErrorInfo;
} else {

    header("Location:?a=Usuario&c=Dashboard");
}

#bvxaqrebmdssfcgl
?>
