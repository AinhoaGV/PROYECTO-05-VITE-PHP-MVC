<?php
// zona de variables de entorno
// Adaptamos el enrutamiento a donde esté /vendor y donde esté el .env
$basePath = dirname(__DIR__, 2);
require_once $basePath . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable($basePath);
$dotenv->load();

include_once $basePath . "/App/config/helpers.php";

// aquí voy a gestionar lo que reciba del formulario
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$lang = $_POST["lang"];
$url = $_POST["url"];
// 1 recibir los datos del formulario a través de POST y los value en nuevas variables que usaré aquí
// Comprobación de términos
if(comprobarVacio($_POST["terminos"])){
    header("location:".$_ENV['RUTA'].$url."?error=aceptar&campo=terminos&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;
}else{
    $terminos = $_POST["terminos"];
}
// if(empty($_POST["terminos"])){
//     // como viene vacía, redirijo a la página de contacto
//     // echo "Hay un error pues no ha aceptado las condiciones de privacidad";
//     header('location:../index.php?error=condiciones');
//     die;
// }else{
//     $terminos = $_POST["terminos"];
// }

// Comprobación de Captcha
$respUserForm02 = $_POST["respUserForm02"];
$respSystemForm02 = $_POST["respSystemForm02"];
// Vacio
if(!isset($respUserForm02)){
    header("location:".$_ENV['RUTA'].$url."?error=vacio&campo=captcha&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;
}
// No coinciden
if($respUserForm02 != $respSystemForm02){
    header("location:".$_ENV['RUTA'].$url."?error=nocoincide&campo=captcha&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;
}
// 2 comprobar que los datos son correctos
$ip = $_SERVER['REMOTE_ADDR']; // guardo la IP del usuario que envía el formulario
$fecha = date('Y-m-d H:i:s'); // guardo la fecha y hora del envío del formulario

//Si nombre viene vacio
if(comprobarVacio($nombre)){
    header("location:".$_ENV['RUTA'].$url."?error=vacio&campo=nombre");
    die;
}
// Si nombre es menor de 3 o mayor de 40
if(comprobarCaracteres($nombre, 3, 40)){
    header("location:".$_ENV['RUTA'].$url."?error=caracteres&campo=nombre&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;
}
// $contadorCaracteres = strlen($nombre);
// if($contadorCaracteres<3 || $contadorCaracteres>40){
//     header('location:../index.php?error=nombreCaracteres');
//     die;
// }
// Si teléfono viene vacio
if(comprobarVacio($telefono)){
    header("location:".$_ENV['RUTA'].$url."?error=vacio&campo=telefono&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;
}

// Si el email viene vacio
if(comprobarVacio($email)){
    header("location:".$_ENV['RUTA'].$url."?error=vacio&campo=email&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;
}

//Expresión regular para comprobar formato email
if (!validar_email($email)) {
    header("location:".$_ENV['RUTA'].$url."?error=formato&campo=email&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;
}
// $patron = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
// if (!preg_match($patron, $email)) {
//     header('location:../index.php?error=emailFormato');
//     die;
// }
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     header('location:../index.php?error=emailFormato');
//     die;
// }

// SI el mensaje viene vacio
if(comprobarVacio($mensaje)){
    header("location:".$_ENV['RUTA'].$url."?error=vacio&campo=mensaje&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;
}
// Si nombre es menor de 4 o mayor de 200
if(comprobarCaracteres($mensaje, 5, 200)){
    header("location:".$_ENV['RUTA'].$url."?error=caracteres&campo=mensaje&nombre=$nombre&telefono=$telefono&email=$email&mensaje=$mensaje#artForm02");
    die;    
}
// $contadorCaracteres = strlen($mensaje);
// if($contadorCaracteres<5 || $contadorCaracteres>200){
//     header('location:../index.php?error=mensajeCaracteres');
//     die;
// }


//TODO: Variabilizar los textos del template de email para utilizarlo en diferentes emails.
//TODO: Placeholdear los labels del template de email para utilizarlo en el idioma.

// 3 Enviar emails
$web = $_ENV["RUTA"];
$correoEmisor = $_ENV["EMAIL_WEB"];
$nombreEmisor = "Web Panadería";
$correoDestinatario = $_ENV["EMAIL_ADMIN"];
$nombreDestinatario = "Admin de la web";
$asunto = "Has recibido una nueva consulta en la web de $nombre";

$html = file_get_contents($basePath . '/App/app/templates/artForm02.html');

$vars = [
    '{web}' => $web,
    '{url}' => $url,
    '{asunto}' => $asunto,
    '{titulo}' => "Has recibido un correo pidiendo información de $nombre",
    '{explicacion}' => "A continuación, te mostramos los datos de la persona interesada:",
    '{nombre}' => $nombre,
    '{telefono}' => $telefono,
    '{email}' => $email,
    '{mensaje}' => $mensaje,
    '{responder}' => "Procura responder dentro del plazo de 2 días",
    '{fecha}' => $fecha
];
$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);

include($basePath . '/App/app/envioPhpMailer.php');

// 4 guardar los datos en una base de datos
// configuramos la conexión en $con
$con = mysqli_connect($_ENV["BBDD_HOST"], $_ENV["BBDD_USER"], $_ENV["BBDD_PASS"], $_ENV["BBDD_BBDD"]);
//si la conexión es false sacamos error
if($con === false){
    error_log("Error de conexión a la base de datos: " . mysqli_connect_error());
}else{
    // si la conexión es correcta, continuamos
    $con->set_charset("utf8mb4");
    $sql = "INSERT INTO consultas_web (creado_en, nombre, telefono, email, mensaje, ip, idioma, url_origen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);
    // ejecutamos el inser del registro en la tabla consultas de la db con prepare
    if($stmt===false){
        error_log("Error al preparar la consulta: " . mysqli_error($con));
    }else{
        //inserción definitiva en la DB
        mysqli_stmt_bind_param($stmt, "ssssssss", $fecha, $nombre, $telefono, $email, $mensaje, $ip, $lang, $url);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    //salimos
    mysqli_close($con);
}

// 5 enviar correos de aviso: a la empresa y al propio usuario
$web = $_ENV["RUTA"];
$correoEmisor = $_ENV["EMAIL_WEB"];
$nombreEmisor = "Web Panadería";
$correoDestinatario = $email;
$nombreDestinatario = $nombre;
$asunto = "Gracias por contactar con nosotros, $nombre";

$html = file_get_contents($basePath . '/App/app/templates/artForm02.html');

$vars = [
    '{web}' => $web,
    '{url}' => $url,
    '{asunto}' => $asunto,
    '{titulo}'   => "Hemos recibido tu consulta, $nombre",
    '{explicacion}' => "A continuación, te mostramos los datos que nos has facilitado:",
    '{nombre}' => $nombre,
    '{telefono}' => $telefono,
    '{email}' => $email,
    '{mensaje}' => $mensaje,
    '{responder}' => "Te responderemos dentro del plazo de 2 días",
    '{fecha}' => $fecha
];
$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);

include($basePath . '/App/app/envioPhpMailer.php');

// 6  redirigir a la página de index para mostrar un mensaje de envío ok en vez de el formulario
$nombreURL = urlencode($nombre);
header("location:".$_ENV['RUTA'].$url."?envio=ok&nom=$nombreURL#artForm02");
die;
?>