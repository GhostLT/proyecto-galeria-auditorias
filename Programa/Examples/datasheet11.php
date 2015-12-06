<?php
echo "inicio hoja 11";
$objPHPExcel->createSheet(11);
$objPHPExcel->getSheet(11)->setTitle('EVOLUTION');

// Add some data to the second sheet, resembling some different data types
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(11);


//include "layout.php";
//LAYOUT

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F10:J10')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L10:N10')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P10:S10')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F12:L12')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

// Set thin black border outline around column
echo date('H:i:s') , " Set thin black border outline around column" , EOL;
$styleThinBlackBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_DOUBLE,
			'color' => array('argb' => 'FFFFCC00'),
		),
	),
);
$objPHPExcel->getActiveSheet()->getStyle('B14:S78')->applyFromArray($styleThinBlackBorderOutline);



// Set thick brown border outline around "Total"
echo date('H:i:s') , " Set thick brown border outline around Total" , EOL;
$styleThickBrownBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THICK,
			'color' => array('argb' => 'FF000000'),
		),
	),
);



// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(50);
$objDrawing->setCoordinates('C3');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

//CARGAR MARGEN GRUESO 
$styleGRUESOBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THICK,
			'color' => array('argb' => 'FF000000'),
		),
	),
);

//=====================================================================================================================================================================
// Set the worksheet tab color
echo date('H:i:s') , " Set the worksheet tab color" , EOL;
$objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FFFF9900');




$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H5')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('H5', 'REPORTE FOTOGRAFICO EVOLUTION');
$objPHPExcel->getActiveSheet()->getStyle('H5')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('H5')->getFont()->setBold(true);

include "datosgenerales.php";

//$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO

// BORDE DELGADO PARA EL MARCO
echo date('H:i:s') , " Set thick brown border outline around Total" , EOL;
$styleThinBrownBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		),
	),
);

$objPHPExcel->getActiveSheet()->getStyle('C17:I30')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C32:I45')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C47:I60')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L17:R30')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L32:R45')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L47:R60')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C62:I75')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L62:R75')->applyFromArray($styleThinBrownBorderOutline);



// Set page orientation and size
//echo date('H:i:s') , " Set page orientation and size" , EOL;
//$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
//$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

//======================================================================================================
//LLENADO DE CAMPOS EN CADA FOTO
//FOTO1
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E31', 'NODO B,RTN RACK FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO2
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N31', 'NODO B,RTN RACK POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO3
$objPHPExcel->getActiveSheet()->getStyle('F46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('F46', 'RTN');
$objPHPExcel->getActiveSheet()->getStyle('F46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('F46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO4
$objPHPExcel->getActiveSheet()->getStyle('O46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O46', 'BBU');
$objPHPExcel->getActiveSheet()->getStyle('O46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO5
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E61', 'CX600 FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO6
$objPHPExcel->getActiveSheet()->getStyle('N61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N61', 'CX600 POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO7
$objPHPExcel->getActiveSheet()->getStyle('E76')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E76', 'APM30 RACK FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E76')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E76')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO8
$objPHPExcel->getActiveSheet()->getStyle('N76')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N76', 'APM30 RACK POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N76')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N76')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//=====================================================AGREGAR FOTOS====================================
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/EVO NODOB RTN FRONTAL.JPG');
$objDrawing->setCoordinates('C17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/EVO NODOB RTN POSTERIOR.JPG');
$objDrawing->setCoordinates('L17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/EVO RTN.JPG');
$objDrawing->setCoordinates('C32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/EVO BBU.JPG');
$objDrawing->setCoordinates('L32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/EVO CX600 FRONTAL.JPG');
$objDrawing->setCoordinates('C47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/EVO CX600 POSTERIOR.JPG');
$objDrawing->setCoordinates('L47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/EVO APM30 FRONTAL.JPG');
$objDrawing->setCoordinates('C62');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/EVO APM30 POSTERIOR.JPG');
$objDrawing->setCoordinates('L62');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

//===================================================================================================
	$nombre_sitio_2g = $_POST['nombre_sitio_2g'];
	
	//$tipo_sitio = $_POST['tipo_sitio'];

	//$nombre_sitio_3g = $_POST['nombre_sitio_3g'];
	
	//$propiedad = $_POST['propiedad'];

	//$direccion = $_POST['direccion'];

	$id2g = $_POST['id2g'];

	//$ubicacion = $_POST['ubicacion'];

	//$id3g = $_POST['id3g'];

	//$num_emp = $_POST['num_emp'];

	$fecha = date ("Y-m-d");


	$ingeniero = $_POST['ingeniero'];

	//echo "{$usuario}" : "{contrasena}";

$objPHPExcel->getActiveSheet()->getStyle('F10')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F10', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F10')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L10')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L10', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L10')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G12')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G12', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G12')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P10')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P10', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P10')->getFont()->setSize(14);





echo "<h2>El Archivo se ha creado con exito...</h2>";

?>