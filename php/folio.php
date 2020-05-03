<?php

//folio
$sql="SELECT MAX( id+1 )FROM reporte";
 $result=mysqli_query($conexion,$sql);
 while ($row = mysqli_fetch_array($result)) {
   $folio_reporte=$row[0].date("Y");
}
?>