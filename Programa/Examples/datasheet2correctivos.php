<?php

$objPHPExcel->createSheet(2);
$objPHPExcel->getSheet(2)->setTitle('CORRECTIVOS');

// Add some data to the second sheet, resembling some different data types
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(2);


include "layout.php";

// Set the worksheet tab color
echo date('H:i:s') , " Set the worksheet tab color" , EOL;
$objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FF66CD00');;




$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I5')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I5', 'REPORTE DE ISSUES EN SITIO');
$objPHPExcel->getActiveSheet()->getStyle('I5')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I5')->getFont()->setBold(true);

//RELLENO FECHA
$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO

//RELLENO ISSUES
$objPHPExcel->getActiveSheet()->getStyle('C15:I15')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C15:I15')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('F15')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('F15', 'ISSUES');
$objPHPExcel->getActiveSheet()->getStyle('F15')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('F15')->getFont()->setBold(true);	

//RELLENO CORRECTIVOS REALIZADOS
$objPHPExcel->getActiveSheet()->getStyle('L15:R15')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C15:R15')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('O15')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('O15', 'CORRECTIVOS REALIZADOS');
$objPHPExcel->getActiveSheet()->getStyle('O15')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('O15')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('O15')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

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

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(50);
$objDrawing->setCoordinates('C70');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H71:M71')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H71:M71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H71:M71')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I71')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I71', 'REPORTE DE ISSUES EN SITIO');
$objPHPExcel->getActiveSheet()->getStyle('I71')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I71')->getFont()->setBold(true);

include "datosgenerales.php";

//DATOS GENERALES 2
$objPHPExcel->getActiveSheet()->getStyle('C74')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C74', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C74')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C76')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C76', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C78')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C78', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K76')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K76', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O76')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O76', 'FECHA:');

$objPHPExcel->getActiveSheet()->getStyle('M78')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('M78', 'FECHA DE CORRECCION:');
$objPHPExcel->getActiveSheet()->getStyle('P78:S78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('P78:S78')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B80:S128')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F76:J76')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L76:N76')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P76:S76')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P78:S78')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F78:L78')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

//RELLENO ISSUES
$objPHPExcel->getActiveSheet()->getStyle('C81:I81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C81:I81')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('F81')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('F81', 'ISSUES');
$objPHPExcel->getActiveSheet()->getStyle('F81')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('F81')->getFont()->setBold(true);	

//RELLENO CORRECTIVOS REALIZADOS
$objPHPExcel->getActiveSheet()->getStyle('L81:R81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C81:R81')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('O81')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('O81', 'CORRECTIVOS REALIZADOS');
$objPHPExcel->getActiveSheet()->getStyle('O81')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('O81')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('O81')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

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
$objPHPExcel->getActiveSheet()->getStyle('B80:S128')->applyFromArray($styleThinBlackBorderOutline);

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

$objPHPExcel->getActiveSheet()->getStyle('C83:I96')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C98:I111')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C113:I126')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L83:R96')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L98:R111')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L113:R126')->applyFromArray($styleThinBrownBorderOutline);


//=========================================================================================================================================================
//DATOS GENERALES 3

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(50);
$objDrawing->setCoordinates('C135');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H136:M136')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H136:M136')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H136:M136')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I136')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I136', 'REPORTE DE ISSUES EN SITIO');
$objPHPExcel->getActiveSheet()->getStyle('I136')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I136')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C138')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C138', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C138')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C140')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C140', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C142')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C142', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K140')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K140', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O140')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O140', 'FECHA:');

$objPHPExcel->getActiveSheet()->getStyle('M142')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('M142', 'FECHA DE CORRECCION:');
$objPHPExcel->getActiveSheet()->getStyle('P142:S142')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('P142:S142')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B144:S193')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F140:J140')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L140:N140')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P140:S140')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P142:S142')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F142:L142')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

//RELLENO ISSUES
$objPHPExcel->getActiveSheet()->getStyle('C145:I145')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C145:I145')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('F145')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('F145', 'ISSUES');
$objPHPExcel->getActiveSheet()->getStyle('F145')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('F145')->getFont()->setBold(true);	

//RELLENO CORRECTIVOS REALIZADOS
$objPHPExcel->getActiveSheet()->getStyle('L145:R145')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C145:R145')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('O145')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('O145', 'CORRECTIVOS REALIZADOS');
$objPHPExcel->getActiveSheet()->getStyle('O145')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('O145')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('O145')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

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
$objPHPExcel->getActiveSheet()->getStyle('B80:S128')->applyFromArray($styleThinBlackBorderOutline);

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

$objPHPExcel->getActiveSheet()->getStyle('C147:I160')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C162:I175')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C177:I190')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L147:R160')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L162:R175')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L177:R190')->applyFromArray($styleThinBrownBorderOutline);
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

//2

$objPHPExcel->getActiveSheet()->getStyle('F76')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F76', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F76')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L76')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L76', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L76')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G78')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G78', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G78')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G76')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G76', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('G76')->getFont()->setSize(14);

//3

$objPHPExcel->getActiveSheet()->getStyle('F140')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F140', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F140')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L140')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L140', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L140')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G142')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G142', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G142')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G140')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G140', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('G140')->getFont()->setSize(14);

?>