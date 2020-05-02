<?php
$para      = $correo;
$titulo    = 'Acuse de reporte sinatec';
$mensaje   = "Hola ".$nombre ." hemos recibido la informacion de tu problema, estamos trabajando para solucionarlo en breve recibiras una respuesta de nuestro equipo"."\r\n"."Para mas informes"."\r\n"."telefono:01800 111222333444";
$cabeceras = 'From: sinatec-ayuda@gob.mx' . "\r\n" .//remitente que aparecera
    'Reply-To: ca.serr.123@gmail.com' . "\r\n" .// a quien se le puede contestar
    'X-Mailer: PHP/' . phpversion();
    $mail=@mail($para, $titulo, $mensaje, $cabeceras);//cuerpo de el correo
    //copia
    $para2="ca.serr.123@gmail.com";
    $mail2=@mail($para2, $titulo, $mensaje, $cabeceras);

?>