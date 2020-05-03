<?php

require_once "../recursos/MPDF57/mpdf.php";
$mpdf= new mpdf('c','A4');
$mpdf->writeHTML(
date_default_timezone_set("America/Mexico_City").'
<body style="font-family: sans-serif">
<img src="../recursos/img/logo-semarnat.png" style="width:35%;" alt="">
<p style="text-align: right;margin-top:-40px">Ciudad de Mexico a '.date("d").' de '.date("m").' del '.date("Y").'</p>
<div clas="container" style="padding: 3%;">
	<h3>Acuse de reporte sinatec </h3>
	
	<h3>Datos generales</h3>
	<p>Folio de reporte sinatec:</p>
	
	<p>Nombre:'.$folio_reporte.'</p>
	
	<p>Curp:'.$cur.'</p>
	
	<p>R.F.C.:'.$rfc.'</p>
	
	<h3>Datos de el contacto</h3>
	
	<p>Correo:'.$correo.'</p>
	
	<p>Telefono:'.$telefono.'</p>
	
	<h3>Descripcion de el problema</h3>
	
	<p>'.$texto.'</p>
	
	<p> <b>Departamento de ayuda sinatec</b></p>

	<p>Telefono: 5511223344</p>
	
	<p>Correo: sinatec-ayuda@gob.com.mx</p>


</div>

</body>'
);
$mpdf->output('reporte.pdf','I')
?>