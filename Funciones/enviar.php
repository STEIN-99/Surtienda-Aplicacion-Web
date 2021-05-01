<?php

$para = 'eric.alexis0399@gmail.com';
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$asunto = 'Sitio web Surtienda';
$headers = "From:" . $correo;



mail($para, $asunto, $mensaje, $headers);

header("Location: ../Index.php");

?>