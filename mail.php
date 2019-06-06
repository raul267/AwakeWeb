<?Php


$correo = $_REQUEST['correo'];
$nombre = $_REQUEST['nombre'];
$clave = $_REQUEST['clave'];

	//ENVIO DEL CORREO



$subject = 'Bienvenido a la comunidad Awake';

$message = '
Bienvenido '.$nombre.' a nuestra comunidad.
  Para ingresar a nuestro sistema y empezar tu registro, ingresa a http://tecnoactive.cl/awake e inicia sesion con tu rut y con la contraseña '.$clave. '

';


$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

//$headers[] = 'To: Rodrigo Gonzalez <rgonzalez@tecnoactive.cl>';
$headers[] = 'From: Soporte Awake soporte@awake.cl';

mail($correo, $subject, $message, implode("\r\n", $headers));
header("Location:index.php?c=Usuario&a=Dashboard");



?>
