<?php
 $conexion=mysqli_connect("localhost","root","","preguntas");
if($conexion){
    echo "conectado";
}
else{
    echo "no conectado";
}
?>