<?php
$nombre_sitio_2g = $_POST['nombre_sitio_2g'];
	
	$tipo_sitio = $_POST['tipo_sitio'];

	$nombre_sitio_3g = $_POST['nombre_sitio_3g'];
	
	$propiedad = $_POST['propiedad'];

	$direccion = $_POST['direccion'];

	$id2g = $_POST['id2g'];

	$ubicacion = $_POST['ubicacion'];

	$id3g = $_POST['id3g'];

	$num_emp = $_POST['num_emp'];

	$fecha = date ("Y-m-d");

include "datasheet0generales.php";
include "datasheet1punchlist.php";
include "datasheet2correctivos.php";
include "datasheet3predio.php";
include "datasheet4subestacion.php";
include "datasheet5shelter.php";
include "datasheet6generador.php";
include "datasheet7torre.php";
include "datasheet8plantacd.php";
include "datasheet9shelter.php";
include "datasheet10transporte.php";
include "datasheet11.php";


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

?>