<?php

$objPHPExcel->createSheet(5);
$objPHPExcel->getSheet(5)->setTitle('Shelter');

// Add some data to the second sheet, resembling some different data types
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(5);

include "layout.php";

// Set the worksheet tab color
echo date('H:i:s') , " Set the worksheet tab color" , EOL;
$objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FFFFFFFF');;



$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I5')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I5', 'REPORTE FOTOGRAFICO SHELTER');
$objPHPExcel->getActiveSheet()->getStyle('I5')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I5')->getFont()->setBold(true);

include "datosgenerales.php";

$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO

$objPHPExcel->getActiveSheet()->getStyle('C17:I30')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C32:I45')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C47:I60')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L17:R30')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L32:R45')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L47:R60')->applyFromArray($styleThinBrownBorderOutline);
//====================================================================================================
//DATOS GENERALES 2
// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(50);
$objDrawing->setCoordinates('C69');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H71:M71')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H71:M71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H71:M71')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I71')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I71', 'REPORTE FOTOGRAFICO TELCO');
$objPHPExcel->getActiveSheet()->getStyle('I71')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I71')->getFont()->setBold(true);

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

//$objPHPExcel->getActiveSheet()->getStyle('M78')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M78', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P78:S78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P78:S78')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('H136')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('H136', 'REPORTE FOTOGRAFICO CASETA EXTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('H136')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('H136')->getFont()->setBold(true);

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

//$objPHPExcel->getActiveSheet()->getStyle('M142')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M142', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P142:S142')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P142:S142')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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

//=========================================================================================================================================================
//DATOS GENERALES 4

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C198');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H199:M199')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H199:M199')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H199:M199')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H199')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('H199', 'REPORTE FOTOGRAFICO CASETA EXTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('H199')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('H199')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C201')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C201', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C201')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C203')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C203', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C205')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C205', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K203')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K203', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O203')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O203', 'FECHA:');

//$objPHPExcel->getActiveSheet()->getStyle('M205')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M205', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P205:S205')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P205:S205')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B207:S256')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F203:J203')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L203:N203')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P203:S203')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P205:S205')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F205:L205')->applyFromArray(
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
//$objPHPExcel->getActiveSheet()->getStyle('B207:S256')->applyFromArray($styleThinBlackBorderOutline);

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

$objPHPExcel->getActiveSheet()->getStyle('C210:I223')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C225:I238')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C240:I253')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L210:R223')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L225:R238')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L240:R253')->applyFromArray($styleThinBrownBorderOutline);

//=========================================================================================================================================================
//DATOS GENERALES 5

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C259');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H260:M260')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H260:M260')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H260:M260')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I260')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I260', 'REPORTE FOTOGRAFICO POP');
$objPHPExcel->getActiveSheet()->getStyle('I260')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I260')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C262')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C262', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C262')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C264')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C264', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C266')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C266', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K264')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K264', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O264')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O264', 'FECHA:');

//$objPHPExcel->getActiveSheet()->getStyle('M266')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M266', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P266:S266')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P266:S266')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B268:S317')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F264:J264')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L264:N264')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P266:S266')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P266:S266')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F266:L266')->applyFromArray(
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
//$objPHPExcel->getActiveSheet()->getStyle('B207:S256')->applyFromArray($styleThinBlackBorderOutline);

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

$objPHPExcel->getActiveSheet()->getStyle('C271:I284')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C286:I299')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C301:I314')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L271:R284')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L286:R299')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L301:R314')->applyFromArray($styleThinBrownBorderOutline);

//======================================================================================================
//LLENADO DE CAMPOS EN CADA FOTO
//FOTO1
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E31', 'CASETA IDEN FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO2
$objPHPExcel->getActiveSheet()->getStyle('M31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M31', 'CASETA IDEN POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('M31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO3
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E46', 'CASETA IDEN LATERAL DER');
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO4
$objPHPExcel->getActiveSheet()->getStyle('M46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M46', 'CASETA IDEN LATERAL IZQ');
$objPHPExcel->getActiveSheet()->getStyle('M46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO5
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E61', 'EQUIPOS HVAC CASETA IDEN');
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO6
$objPHPExcel->getActiveSheet()->getStyle('M61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M61', 'PASAMUROS Y BARRA CASETA IDEN Y 3G');
$objPHPExcel->getActiveSheet()->getStyle('M61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO7
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E97', 'PUERTA DC SHELTER');
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO8
$objPHPExcel->getActiveSheet()->getStyle('N97')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N97', 'BOTA AGUAS');
$objPHPExcel->getActiveSheet()->getStyle('N97')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N97')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO9
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E112', 'LAMPARA EXTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO10
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N112', 'LAMPARA SUBURBANA');
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO11
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E127', 'PASAMUROS 1');
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO12
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O127', 'PASAMUROS 2');
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO13
$objPHPExcel->getActiveSheet()->getStyle('E161')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E161', 'CASETA TELCO FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E161')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E161')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO14
$objPHPExcel->getActiveSheet()->getStyle('M161')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M161', 'CASETA TELCO POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('M161')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M161')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO15
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E176', 'CASETA TELCO LATERAL DER');
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO16
$objPHPExcel->getActiveSheet()->getStyle('M176')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M176', 'CASETA TELCO LATERAL IZQ');
$objPHPExcel->getActiveSheet()->getStyle('M176')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M176')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO17
$objPHPExcel->getActiveSheet()->getStyle('D191')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D191', 'EQUIPOS HVAC CASETA TELCO');
$objPHPExcel->getActiveSheet()->getStyle('D191')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D191')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO18
$objPHPExcel->getActiveSheet()->getStyle('M191')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M191', 'PASAMUROS Y BARRA CASETA TELCO');
$objPHPExcel->getActiveSheet()->getStyle('M191')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M191')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO19
$objPHPExcel->getActiveSheet()->getStyle('E224')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E224', 'CASETA POP FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E224')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E224')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO20
$objPHPExcel->getActiveSheet()->getStyle('N224')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N224', 'CASETA POP POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N224')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N224')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO21
$objPHPExcel->getActiveSheet()->getStyle('E239')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E239', 'CASETA POP LATERAL DER');
$objPHPExcel->getActiveSheet()->getStyle('E239')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E239')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO22
$objPHPExcel->getActiveSheet()->getStyle('N239')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N239', 'CASETA POP LATERAL IZQ');
$objPHPExcel->getActiveSheet()->getStyle('N239')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N239')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO23
$objPHPExcel->getActiveSheet()->getStyle('E254')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E254', 'EQUIPOS HVAC CASETA POP');
$objPHPExcel->getActiveSheet()->getStyle('E254')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E254')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO24
$objPHPExcel->getActiveSheet()->getStyle('M254')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M254', 'PASAMUROS Y BARRA CASETA POP');
$objPHPExcel->getActiveSheet()->getStyle('M254')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M254')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO25
$objPHPExcel->getActiveSheet()->getStyle('E285')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E285', 'CASETA HUB SITE FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E285')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E285')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO26
$objPHPExcel->getActiveSheet()->getStyle('N285')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N285', 'CASETA HUB SITE POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N285')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N285')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO27
$objPHPExcel->getActiveSheet()->getStyle('D300')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D300', 'CASETA HUB SITE LATERAL DERECHO');
$objPHPExcel->getActiveSheet()->getStyle('D300')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D300')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO28
$objPHPExcel->getActiveSheet()->getStyle('N300')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N300', 'CASETA HUB SITE LATERAL IZQ');
$objPHPExcel->getActiveSheet()->getStyle('N300')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N300')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO29
$objPHPExcel->getActiveSheet()->getStyle('D315')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D315', 'EQUIPOS HVAC CASETA HUB SITE');
$objPHPExcel->getActiveSheet()->getStyle('D315')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D315')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO30
$objPHPExcel->getActiveSheet()->getStyle('M315')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M315', 'PASAMUROS Y BARRA CASETA HUB SITE');
$objPHPExcel->getActiveSheet()->getStyle('M315')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M315')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//======================================================================================================
include "renombraryajustar.php";


$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER CASETA IDEN FRONTAL.JPG');
$objDrawing->setCoordinates('C17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER CASETA IDEN POSTERIOR.JPG');
$objDrawing->setCoordinates('L17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER CASETA IDEN LATERAL DER.JPG');
$objDrawing->setCoordinates('C32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER CASETA IDEN LATERAL IZQ.JPG');
$objDrawing->setCoordinates('L32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER EQUIPOS HVAC CASETA IDEN.JPG');
$objDrawing->setCoordinates('C47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER PASAMUROS Y BARRA CASETA IDEN Y 3G.JPG');
$objDrawing->setCoordinates('L47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER PUERTA.JPG');
$objDrawing->setCoordinates('C83');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER BOTA AGUAS.JPG');
$objDrawing->setCoordinates('L83');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER LAMPARA EXTERIOR.JPG');
$objDrawing->setCoordinates('C98');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER LAMPARA SUBURBANA.JPG');
$objDrawing->setCoordinates('L98');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER PASAMUROS1.JPG');
$objDrawing->setCoordinates('C113');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SHELTER PASAMUROS2.JPG');
$objDrawing->setCoordinates('L113');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA TELCO FRONTAL.JPG');
$objDrawing->setCoordinates('C147');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA TELCO POSTERIOR.JPG');
$objDrawing->setCoordinates('L147');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA TELCO LATERAL DER.JPG');
$objDrawing->setCoordinates('C162');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA TELCO LATERAL IZQ.JPG');
$objDrawing->setCoordinates('L162');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA TELCO EQUIPOS HVAC.JPG');
$objDrawing->setCoordinates('C177');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA TELCO PASAMUROS Y BARRA CASETA TELCO.JPG');
$objDrawing->setCoordinates('L177');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA POP FRONTAL.JPG');
$objDrawing->setCoordinates('C210');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA POP POSTERIOR.JPG');
$objDrawing->setCoordinates('L210');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA POP LATERAL DER.JPG');
$objDrawing->setCoordinates('C225');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA POP LATERAL IZQ.JPG');
$objDrawing->setCoordinates('L225');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA POP EQUIPOS HVAC.JPG');
$objDrawing->setCoordinates('C240');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA POP PASAMUROS Y BARRA.JPG');
$objDrawing->setCoordinates('L240');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA HUB FRONTAL.JPG');
$objDrawing->setCoordinates('C271');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA HUB POSTERIOR.JPG');
$objDrawing->setCoordinates('L271');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA HUB LATERAL DER.JPG');
$objDrawing->setCoordinates('C286');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA HUB LATERAL IZQ.JPG');
$objDrawing->setCoordinates('L286');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA HUB EQUIPOS HVAC.JPG');
$objDrawing->setCoordinates('C301');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/CASETA HUB PASAMUROS Y BARRA.JPG');
$objDrawing->setCoordinates('L301');
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

$objPHPExcel->getActiveSheet()->getStyle('P76')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P76', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P76')->getFont()->setSize(14);

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

$objPHPExcel->getActiveSheet()->getStyle('P140')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P140', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P140')->getFont()->setSize(14);

//4

$objPHPExcel->getActiveSheet()->getStyle('F203')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F203', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F203')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L203')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L203', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L203')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G205')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G205', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G205')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P203')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P203', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P203')->getFont()->setSize(14);

//5

$objPHPExcel->getActiveSheet()->getStyle('F264')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F264', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F264')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L264')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L264', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L264')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G266')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G266', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G266')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P264')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P264', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P264')->getFont()->setSize(14);



?>