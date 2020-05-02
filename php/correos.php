<?php
$para      = $correo;
$titulo    = 'Acuse de reporte sinatec';
$mensaje   = "Hola".$nombre ."hemos recibido la informacion de tu problema, estamos trabajando para solucionarlo en breve recibiras una respuesta de parte de nuestro esquipo"."\r\n"."telrfono:01800 111222333444";
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>
