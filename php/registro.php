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
include("folio.php");
#include("pdf.php");
include("correos.php");
//registro
$sql="INSERT INTO `reporte` ( `nombre` ,`folio_reporte`, `apellido` , `curp` , `rfc` , `folio` , `estacion_servicio` , `correo` , `telefono` , `texto`)
VALUES ('$nombre','$folio_reporte', '$apellido', '$curp', '$rfc', '$folio', '$estacion', '$correo', '$telefono', '$texto');";
// if($mail){
echo $result=mysqli_query($conexion,$sql);
// }
?>