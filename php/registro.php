<?php
require_once "conexion.php";
$conexion=conexion();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$curp=$_POST['curp'];
$rfc=$_POST['rfc'];
$folio=$_POST['folio'];
$estacion=$_POST['estacion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$texto=$_POST['texto'];

$sql="INSERT INTO `reporte` ( `nombre` , `apellido` , `curp` , `rfc` , `folio` , `estacion_servicio` , `correo` , `telefono` , `texto`)
VALUES ('$nombre', '$apellido', '$curp', '$rfc', '$folio', '$estacion', '$correo', '$telefono', '$texto');";
echo $result=mysqli_query($conexion,$sql);
?>