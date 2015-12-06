<?php
echo "inicio hoja 9  ";
$objPHPExcel->createSheet(9);
$objPHPExcel->getSheet(9)->setTitle('Site');

// Add some data to the second sheet, resembling some different data types
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(9);

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
$objPHPExcel->getActiveSheet()->setCellValue('I71', 'REPORTE FOTOGRAFICO SHELTER');
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
$objPHPExcel->getActiveSheet()->getStyle('I136')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I136', 'REPORTE FOTOGRAFICO SHELTER');
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
$objPHPExcel->getActiveSheet()->getStyle('I199')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I199', 'REPORTE FOTOGRAFICO SHELTER');
$objPHPExcel->getActiveSheet()->getStyle('I199')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I199')->getFont()->setBold(true);

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
//DATOS GENERALES 5 POP PRIMERA

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

//=========================================================================================================================================================
//DATOS GENERALES 6 POP SEGUNDA

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C320');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H321:M321')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H321:M321')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H321:M321')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I321')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I321', 'REPORTE FOTOGRAFICO POP');
$objPHPExcel->getActiveSheet()->getStyle('I321')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I321')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C323')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C323', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C323')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C325')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C325', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C327')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C327', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K325')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K325', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O325')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O325', 'FECHA:');

//$objPHPExcel->getActiveSheet()->getStyle('M327')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M327', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P327:S327')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P327:S327')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B329:S378')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F325:J325')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L325:N325')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P325:S325')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P327:S327')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F327:L327')->applyFromArray(
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

$objPHPExcel->getActiveSheet()->getStyle('C332:I345')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C347:I360')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C362:I375')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L332:R345')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L347:R360')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L362:R375')->applyFromArray($styleThinBrownBorderOutline);

//=========================================================================================================================================================
//DATOS GENERALES 7 POP TERCERA

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C381');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H382:M382')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H382:M382')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H382:M382')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I382')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I382', 'REPORTE FOTOGRAFICO POP');
$objPHPExcel->getActiveSheet()->getStyle('I382')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I382')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C384')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C384', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C384')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C386')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C386', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C388')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C388', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K386')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K386', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O386')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O386', 'FECHA:');

$objPHPExcel->getActiveSheet()->getStyle('M388')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('M388', 'FECHA DE CORRECCION:');
$objPHPExcel->getActiveSheet()->getStyle('P388:S388')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('P388:S388')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B390:S439')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F386:J386')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L386:N386')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P386:S386')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P386:S386')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F388:L388')->applyFromArray(
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

$objPHPExcel->getActiveSheet()->getStyle('C393:I406')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C408:I421')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C423:I436')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L393:R406')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L408:R421')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L423:R436')->applyFromArray($styleThinBrownBorderOutline);

//=========================================================================================================================================================
//DATOS GENERALES 8 CUARTA POP

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C442');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H443:M443')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H443:M443')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H443:M443')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I443')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I443', 'REPORTE FOTOGRAFICO POP');
$objPHPExcel->getActiveSheet()->getStyle('I443')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I443')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C445')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C445', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C445')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C447')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C447', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C449')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C449', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K447')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K447', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O447')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O447', 'FECHA:');

$objPHPExcel->getActiveSheet()->getStyle('M449')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('M449', 'FECHA DE CORRECCION:');
$objPHPExcel->getActiveSheet()->getStyle('P449:S449')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('P449:S449')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B451:S500')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F447:J447')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L447:N447')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P447:S447')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P449:S449')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F449:L449')->applyFromArray(
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

$objPHPExcel->getActiveSheet()->getStyle('C454:I467')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C469:I482')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C484:I497')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L454:R467')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L469:R482')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L484:R497')->applyFromArray($styleThinBrownBorderOutline);

//=========================================================================================================================================================
//DATOS GENERALES 9 PRIMERA TELCO

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C503');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H504:M504')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H504:M504')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H504:M504')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I504')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I504', 'REPORTE FOTOGRAFICO TELCO');
$objPHPExcel->getActiveSheet()->getStyle('I504')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I504')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C506')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C506', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C506')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C508')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C508', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C510')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C510', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K508')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K508', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O508')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O508', 'FECHA:');

//$objPHPExcel->getActiveSheet()->getStyle('M510')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M510', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P510:S510')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P510:S510')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B512:S561')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F508:J508')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L508:N508')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P508:S508')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P510:S510')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F510:L510')->applyFromArray(
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

$objPHPExcel->getActiveSheet()->getStyle('C515:I528')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C530:I543')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C545:I558')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L515:R528')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L530:R543')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L545:R558')->applyFromArray($styleThinBrownBorderOutline);

//=========================================================================================================================================================
//DATOS GENERALES 10 SEGUNDA TELCO

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C564');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H565:M565')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H565:M565')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H565:M565')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I565')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I565', 'REPORTE FOTOGRAFICO TELCO');
$objPHPExcel->getActiveSheet()->getStyle('I565')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I565')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C567')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C567', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C567')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C569')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C569', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C571')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C571', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K569')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K569', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O569')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O569', 'FECHA:');

//$objPHPExcel->getActiveSheet()->getStyle('M571')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M571', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P571:S571')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P571:S571')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B573:S622')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F569:J569')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L569:N569')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P569:S569')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P571:S571')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F571:L571')->applyFromArray(
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

$objPHPExcel->getActiveSheet()->getStyle('C576:I589')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C591:I604')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C606:I619')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L576:R589')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L591:R604')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L606:R619')->applyFromArray($styleThinBrownBorderOutline);

//=========================================================================================================================================================
//DATOS GENERALES 11 

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C625');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H626:M626')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H626:M626')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H626:M626')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I626')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I626', 'REPORTE FOTOGRAFICO TELCO');
$objPHPExcel->getActiveSheet()->getStyle('I626')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I626')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C628')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C628', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C628')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C630')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C630', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C632')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C632', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K630')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K630', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O630')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O630', 'FECHA:');

//$objPHPExcel->getActiveSheet()->getStyle('M632')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M632', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P632:S632')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P632:S632')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B634:S683')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F630:J630')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L630:N630')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P630:S630')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P632:S632')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F632:L632')->applyFromArray(
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

$objPHPExcel->getActiveSheet()->getStyle('C637:I650')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C652:I665')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C667:I680')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L637:R650')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L652:R665')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L667:R680')->applyFromArray($styleThinBrownBorderOutline);

//=========================================================================================================================================================
//DATOS GENERALES 12 CUARTA Y ULTIMA TELCO

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(48);
$objDrawing->setCoordinates('C686');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->getStyle('H687:M687')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H687:M687')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H687:M687')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I687')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I687', 'REPORTE FOTOGRAFICO TELCO');
$objPHPExcel->getActiveSheet()->getStyle('I687')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I687')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C689')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C689', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C689')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C691')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C691', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C693')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C693', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K691')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K691', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O691')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O691', 'FECHA:');

//$objPHPExcel->getActiveSheet()->getStyle('M693')->getFont()->setName('Arial');
//$objPHPExcel->getActiveSheet()->setCellValue('M693', 'FECHA DE CORRECCION:');
//$objPHPExcel->getActiveSheet()->getStyle('P693:S693')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
//$objPHPExcel->getActiveSheet()->getStyle('P693:S693')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


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
$objPHPExcel->getActiveSheet()->getStyle('B695:S744')->applyFromArray($styleThinBlackBorderOutline);

//LINEA HORIZONTAL ABAJO
$objPHPExcel->getActiveSheet()->getStyle('F691:J691')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);



$objPHPExcel->getActiveSheet()->getStyle('L691:N691')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P691:S691')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('P693:S693')->applyFromArray(
		array(
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
		)
);

$objPHPExcel->getActiveSheet()->getStyle('F693:L693')->applyFromArray(
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

$objPHPExcel->getActiveSheet()->getStyle('C698:I711')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C713:I726')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C728:I741')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L698:R711')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L713:R726')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L728:R741')->applyFromArray($styleThinBrownBorderOutline);


//======================================================================================================
//LLENADO DE CAMPOS EN CADA FOTO
//FOTO1
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E31', 'PISO CASETA');
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO2
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N31', 'PISO CASETA 2');
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO3
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E46', 'SUPRESOR DC PICOS');
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO4
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N46', 'PUNCH BLOCK ALARMAS');
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO5
$objPHPExcel->getActiveSheet()->getStyle('C61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('C61', 'PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN');
$objPHPExcel->getActiveSheet()->getStyle('C61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('C61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO6
$objPHPExcel->getActiveSheet()->getStyle('L61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('L61', 'PASAMUROS Y PORTA ARRESTOR Y BARRA 3G');
$objPHPExcel->getActiveSheet()->getStyle('L61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('L61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO7
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E97', 'HVAC REJILLAS UNIDAD 1');
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO8
$objPHPExcel->getActiveSheet()->getStyle('N97')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N97', 'HVAC REJILLAS UNIDAD 2');
$objPHPExcel->getActiveSheet()->getStyle('N97')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N97')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO9
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E112', 'RACK CONTROLLER FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO10
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N112', 'RACK CONTROLLER POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO11
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E127', 'RACK RF FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO12
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O127', 'RACK RF POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO13
$objPHPExcel->getActiveSheet()->getStyle('E161')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E161', 'RACK CXP MSCR FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E161')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E161')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO14
$objPHPExcel->getActiveSheet()->getStyle('N161')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N161', 'RACK CXP MSCR POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N161')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N161')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO15
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E176', 'ESCALCRILLA CABLERA RACK CXP MSCR');
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO16
$objPHPExcel->getActiveSheet()->getStyle('N176')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N176', 'ESCALCRILLA CABLERA RACK CXP MSCR');
$objPHPExcel->getActiveSheet()->getStyle('N176')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N176')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO17
$objPHPExcel->getActiveSheet()->getStyle('D191')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D191', 'HALO DC TIERRA INTERNO 1');
$objPHPExcel->getActiveSheet()->getStyle('D191')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D191')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO18
$objPHPExcel->getActiveSheet()->getStyle('M191')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M191', 'HALO DC TIERRA INTERNO 2');
$objPHPExcel->getActiveSheet()->getStyle('M191')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M191')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO19
$objPHPExcel->getActiveSheet()->getStyle('E224')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E224', 'SENSOR DE HUMO');
$objPHPExcel->getActiveSheet()->getStyle('E224')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E224')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO20
$objPHPExcel->getActiveSheet()->getStyle('N224')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N224', 'SENSOR DE PUERTA');
$objPHPExcel->getActiveSheet()->getStyle('N224')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N224')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO21
$objPHPExcel->getActiveSheet()->getStyle('D239')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D239', 'SENSOR DC TEMPERATURA(ALTA Y BAJA)');
$objPHPExcel->getActiveSheet()->getStyle('D239')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D239')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO22
$objPHPExcel->getActiveSheet()->getStyle('N239')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N239', 'LCD LAG/HVAC');
$objPHPExcel->getActiveSheet()->getStyle('N239')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N239')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO23
$objPHPExcel->getActiveSheet()->getStyle('F254')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('F254', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('F254')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('F254')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO24
$objPHPExcel->getActiveSheet()->getStyle('O254')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O254', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('O254')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O254')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO25
$objPHPExcel->getActiveSheet()->getStyle('E285')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E285', 'PISO CASETA 1');
$objPHPExcel->getActiveSheet()->getStyle('E285')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E285')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO26
$objPHPExcel->getActiveSheet()->getStyle('N285')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N285', 'PISO CASETA 2');
$objPHPExcel->getActiveSheet()->getStyle('N285')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N285')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO27
$objPHPExcel->getActiveSheet()->getStyle('E300')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E300', 'SUPRESOR DE PICOS');
$objPHPExcel->getActiveSheet()->getStyle('E300')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E300')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO28
$objPHPExcel->getActiveSheet()->getStyle('N300')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N300', 'PUNCH BLOCK ALARMAS');
$objPHPExcel->getActiveSheet()->getStyle('N300')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N300')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO29
$objPHPExcel->getActiveSheet()->getStyle('C315')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('C315', 'PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN');
$objPHPExcel->getActiveSheet()->getStyle('C315')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('C315')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO30
$objPHPExcel->getActiveSheet()->getStyle('L315')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('L315', 'PASAMUROS Y PORTA ARRESTOR Y BARRA 3G');
$objPHPExcel->getActiveSheet()->getStyle('L315')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('L315')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO31
$objPHPExcel->getActiveSheet()->getStyle('E346')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E346', 'HVAC REJILLAS UNIDAD 1');
$objPHPExcel->getActiveSheet()->getStyle('E346')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E346')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO32
$objPHPExcel->getActiveSheet()->getStyle('N346')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N346', 'HVAC REJILLAS UNIDAD 2');
$objPHPExcel->getActiveSheet()->getStyle('N346')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N346')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO33
$objPHPExcel->getActiveSheet()->getStyle('E361')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E361', 'RACK CONTROLLER FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E361')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E361')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO34
$objPHPExcel->getActiveSheet()->getStyle('N361')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N361', 'RACK CONTROLLER POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N361')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N361')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO35
$objPHPExcel->getActiveSheet()->getStyle('E376')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E376', 'RACK RF FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E376')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E376')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO36
$objPHPExcel->getActiveSheet()->getStyle('N376')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N376', 'RACK RF POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N376')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N376')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO37
$objPHPExcel->getActiveSheet()->getStyle('E407')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E407', 'RACK CXP MSER FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E407')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E407')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO38
$objPHPExcel->getActiveSheet()->getStyle('N407')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N407', 'RACK CXP MSER POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N407')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N407')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO39
$objPHPExcel->getActiveSheet()->getStyle('D422')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D422', 'ESCALERILLA CABLERA RACK CXP MSCR');
$objPHPExcel->getActiveSheet()->getStyle('D422')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D422')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO40
$objPHPExcel->getActiveSheet()->getStyle('M422')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M422', 'ESCALERILLA CABLERA RACK CXP MSCR');
$objPHPExcel->getActiveSheet()->getStyle('M422')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M422')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO41
$objPHPExcel->getActiveSheet()->getStyle('E437')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E437', 'HALO DE TIERRA INTERNO 1');
$objPHPExcel->getActiveSheet()->getStyle('E437')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E437')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO42
$objPHPExcel->getActiveSheet()->getStyle('N437')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N437', 'HALO DE TIERRA INTERNO 2');
$objPHPExcel->getActiveSheet()->getStyle('N437')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N437')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO43
$objPHPExcel->getActiveSheet()->getStyle('E468')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E468', 'SENSOR DE HUMO');
$objPHPExcel->getActiveSheet()->getStyle('E468')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E468')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO44
$objPHPExcel->getActiveSheet()->getStyle('N468')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N468', 'SENSOR DE PUERTA');
$objPHPExcel->getActiveSheet()->getStyle('N468')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N468')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO45
$objPHPExcel->getActiveSheet()->getStyle('D483')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D483', 'SENSOR DE TEMPERATURA(ALTA Y BAJA)');
$objPHPExcel->getActiveSheet()->getStyle('D483')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D483')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO46
$objPHPExcel->getActiveSheet()->getStyle('N483')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N483', 'LED LAG/HVAC');
$objPHPExcel->getActiveSheet()->getStyle('N483')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N483')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO47
$objPHPExcel->getActiveSheet()->getStyle('F498')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('F498', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('F498')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('F498')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO48
$objPHPExcel->getActiveSheet()->getStyle('O498')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O498', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('O498')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O498')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO49
$objPHPExcel->getActiveSheet()->getStyle('E529')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E529', 'PISO CASETA 1');
$objPHPExcel->getActiveSheet()->getStyle('E529')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E529')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO50
$objPHPExcel->getActiveSheet()->getStyle('N529')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N529', 'PISO CASETA 2');
$objPHPExcel->getActiveSheet()->getStyle('N529')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N529')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO51
$objPHPExcel->getActiveSheet()->getStyle('E544')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E544', 'SUPRESOR DC PICOS');
$objPHPExcel->getActiveSheet()->getStyle('E544')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E544')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO52
$objPHPExcel->getActiveSheet()->getStyle('N544')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N544', 'PUNCH BLOCK ALARMAS');
$objPHPExcel->getActiveSheet()->getStyle('N544')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N544')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO53
$objPHPExcel->getActiveSheet()->getStyle('C559')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('C559', 'PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN');
$objPHPExcel->getActiveSheet()->getStyle('C559')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('C559')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO54
$objPHPExcel->getActiveSheet()->getStyle('L559')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('L559', 'PASAMUROS Y PORTA ARRESTOR Y BARRA 3G');
$objPHPExcel->getActiveSheet()->getStyle('L559')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('L559')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO55
$objPHPExcel->getActiveSheet()->getStyle('E590')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E590', 'HVAC REJILLAS UNIDAD 1');
$objPHPExcel->getActiveSheet()->getStyle('E590')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E590')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO56
$objPHPExcel->getActiveSheet()->getStyle('N590')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N590', 'HVAC REJILLAS UNIDAD 2');
$objPHPExcel->getActiveSheet()->getStyle('N590')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N590')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO57
$objPHPExcel->getActiveSheet()->getStyle('E605')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E605', 'RACK CONTROLLER FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E605')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E605')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO58
$objPHPExcel->getActiveSheet()->getStyle('N605')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N605', 'RACK CONTROLLER POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N605')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N605')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO59
$objPHPExcel->getActiveSheet()->getStyle('E620')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E620', 'RACK RF FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E620')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E620')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO60
$objPHPExcel->getActiveSheet()->getStyle('N620')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N620', 'RACK RF POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N620')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N620')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO61
$objPHPExcel->getActiveSheet()->getStyle('E651')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E651', 'RACK EXP MSER FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E651')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E651')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO62
$objPHPExcel->getActiveSheet()->getStyle('N651')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N651', 'RACK EXP MSER POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N651')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N651')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO63
$objPHPExcel->getActiveSheet()->getStyle('D666')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D666', 'ESCALERILLA CALBERA RACK EXP MSER');
$objPHPExcel->getActiveSheet()->getStyle('D666')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D666')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO64
$objPHPExcel->getActiveSheet()->getStyle('M666')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M666', 'ESCALERILLA CABLERA RACK EXP MSER');
$objPHPExcel->getActiveSheet()->getStyle('M666')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M666')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO65
$objPHPExcel->getActiveSheet()->getStyle('E681')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E681', 'HALO DE TIERRA INTERNO 1');
$objPHPExcel->getActiveSheet()->getStyle('E681')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E681')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO66
$objPHPExcel->getActiveSheet()->getStyle('N681')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N681', 'HALO DE TIERRA INTERNO 2');
$objPHPExcel->getActiveSheet()->getStyle('N681')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N681')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO67
$objPHPExcel->getActiveSheet()->getStyle('E712')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E712', 'SENSOR DE HUMO');
$objPHPExcel->getActiveSheet()->getStyle('E712')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E712')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO68
$objPHPExcel->getActiveSheet()->getStyle('N712')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N712', 'SENSOR DE PUERTA');
$objPHPExcel->getActiveSheet()->getStyle('N712')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N712')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO69
$objPHPExcel->getActiveSheet()->getStyle('C727')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('C727', 'SENSOR DE TEMPERATURA(ALTA Y BAJA)');
$objPHPExcel->getActiveSheet()->getStyle('C727')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('C727')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO70
$objPHPExcel->getActiveSheet()->getStyle('N727')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N727', 'LED LAG/HVAC');
$objPHPExcel->getActiveSheet()->getStyle('N727')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N727')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO71
$objPHPExcel->getActiveSheet()->getStyle('F742')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('F742', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('F742')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('F742')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO72
$objPHPExcel->getActiveSheet()->getStyle('O742')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O742', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('O742')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O742')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//==========================================COMIENZAN LAS FOTOS================================
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE PISO1.JPG');
$objDrawing->setCoordinates('C17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE PISO2.JPG');
$objDrawing->setCoordinates('L17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE SUPRESOR DE PICOS.JPG');
$objDrawing->setCoordinates('C32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE PUNCH BLOCK ALARMAS.JPG');
$objDrawing->setCoordinates('L32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN.JPG');
$objDrawing->setCoordinates('C47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G.JPG');
$objDrawing->setCoordinates('L47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE HVAC REJILLAS UNIDAD1.JPG');
$objDrawing->setCoordinates('C83');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE HVAC REJILLAS UNIDAD2.JPG');
$objDrawing->setCoordinates('L83');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE RACK CONTROLLER FRONTAL.JPG');
$objDrawing->setCoordinates('C98');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE RACK CONTROLLER POSTERIOR.JPG');
$objDrawing->setCoordinates('L98');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE RACK RF FRONTAL.JPG');
$objDrawing->setCoordinates('C113');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE RACK RF POSTERIOR.JPG');
$objDrawing->setCoordinates('L113');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE RACK EXP MSCR FRONTAL.JPG');
$objDrawing->setCoordinates('C147');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE RACK EXP MSCR POSTERIOR.JPG');
$objDrawing->setCoordinates('L147');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR1.JPG');
$objDrawing->setCoordinates('C162');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR2.JPG');
$objDrawing->setCoordinates('L162');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE HALO DE TIERRA INTERNO1.JPG');
$objDrawing->setCoordinates('C177');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE HALO DE TIERRA INTERNO2.JPG');
$objDrawing->setCoordinates('L177');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE SENSOR DE HUMO.JPG');
$objDrawing->setCoordinates('C210');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE SENSOR DE PUERTA.JPG');
$objDrawing->setCoordinates('L210');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE SENSOR DE TEMPERATURA ALTA Y BAJA.JPG');
$objDrawing->setCoordinates('C225');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE LEG LAG.JPG');
$objDrawing->setCoordinates('L225');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE OTRO1.JPG');
$objDrawing->setCoordinates('C240');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE OTRO2.JPG');
$objDrawing->setCoordinates('L240');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP PISO1.JPG');
$objDrawing->setCoordinates('C271');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP PISO2.JPG');
$objDrawing->setCoordinates('L271');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP SUPRESOR DE PICOS.JPG');
$objDrawing->setCoordinates('C286');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP PUNCH BLOCK ALARMAS.JPG');
$objDrawing->setCoordinates('L286');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP PASAMUROS.JPG');
$objDrawing->setCoordinates('C301');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP PASAMUROS 3G.JPG');
$objDrawing->setCoordinates('L301');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD1.JPG');
$objDrawing->setCoordinates('C332');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD2.JPG');
$objDrawing->setCoordinates('L332');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP RACK CONTROLLER FRONTAL.JPG');
$objDrawing->setCoordinates('C347');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP RACK CONTROLLER POSTERIOR.JPG');
$objDrawing->setCoordinates('L347');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP RACK RF FRONTAL.JPG');
$objDrawing->setCoordinates('C362');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP RACK RF POSTERIOR.JPG');
$objDrawing->setCoordinates('L362');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP RACK EXP MSER FRONTAL.JPG');
$objDrawing->setCoordinates('C393');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP RACK EXP MSER POSTERIOR.JPG');
$objDrawing->setCoordinates('L393');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP ESCALERILLA CABLERA1.JPG');
$objDrawing->setCoordinates('C408');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP ESCALERILLA CABLERA2.JPG');
$objDrawing->setCoordinates('L408');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP HALO DE TIERRA1.JPG');
$objDrawing->setCoordinates('C423');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP HALO DE TIERRA2.JPG');
$objDrawing->setCoordinates('L423');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP SENSOR DE HUMO.JPG');
$objDrawing->setCoordinates('C454');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP SENSOR DE PUERTA.JPG');
$objDrawing->setCoordinates('L454');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP SENSOR DE TEMPERATURA.JPG');
$objDrawing->setCoordinates('C469');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP LED LAG.JPG');
$objDrawing->setCoordinates('L469');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP OTRO1.JPG');
$objDrawing->setCoordinates('C484');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE POP OTRO2.JPG');
$objDrawing->setCoordinates('L484');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO PISO1.JPG');
$objDrawing->setCoordinates('C515');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO PISO2.JPG');
$objDrawing->setCoordinates('L515');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO SUPRESOR DE PICOS.JPG');
$objDrawing->setCoordinates('C530');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO PUNCH BLOCK ALARMAS.JPG');
$objDrawing->setCoordinates('L530');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO PASAMUROS.JPG');
$objDrawing->setCoordinates('C545');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO PASAMUROS 3G.JPG');
$objDrawing->setCoordinates('L545');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD1.JPG');
$objDrawing->setCoordinates('C576');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD2.JPG');
$objDrawing->setCoordinates('L576');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO RACK CONTROLLER FRONTAL.JPG');
$objDrawing->setCoordinates('C591');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO RACK CONTROLLER POSTERIOR.JPG');
$objDrawing->setCoordinates('L591');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO RACK RF FRONTAL.JPG');
$objDrawing->setCoordinates('C606');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO RACK RF POSTERIOR.JPG');
$objDrawing->setCoordinates('L606');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO RACK EXP MSER FRONTAL.JPG');
$objDrawing->setCoordinates('C637');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO RACK EXP MSER POSTERIOR.JPG');
$objDrawing->setCoordinates('L637');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO ESCALERILLA CABLERA1.JPG');
$objDrawing->setCoordinates('C652');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO ESCALERILLA CABLERA2.JPG');
$objDrawing->setCoordinates('L652');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO HALO DE TIERRA1.JPG');
$objDrawing->setCoordinates('C667');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO HALO DE TIERRA2.JPG');
$objDrawing->setCoordinates('L667');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO SENSOR DE HUMO.JPG');
$objDrawing->setCoordinates('C698');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO SENSOR DE PUERTA.JPG');
$objDrawing->setCoordinates('L698');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO SENSOR DE TEMPERATURA.JPG');
$objDrawing->setCoordinates('C713');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO LED LAG.JPG');
$objDrawing->setCoordinates('L713');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO OTRO1.JPG');
$objDrawing->setCoordinates('C728');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());


$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/SITE TELCO OTRO2.JPG');
$objDrawing->setCoordinates('L728');
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

//6

$objPHPExcel->getActiveSheet()->getStyle('F325')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F325', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F325')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L325')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L325', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L325')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G327')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G327', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G327')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P325')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P325', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P325')->getFont()->setSize(14);

//7

$objPHPExcel->getActiveSheet()->getStyle('F386')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F386', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F386')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L386')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L386', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L386')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G388')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G388', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G388')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P386')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P386', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P386')->getFont()->setSize(14);

//8

$objPHPExcel->getActiveSheet()->getStyle('F447')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F447', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F447')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L447')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L447', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L447')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G449')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G449', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G449')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P447')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P447', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P447')->getFont()->setSize(14);

//9

$objPHPExcel->getActiveSheet()->getStyle('F508')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F508', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F508')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L508')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L508', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L508')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G510')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G510', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G510')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P508')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P508', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P508')->getFont()->setSize(14);

//10

$objPHPExcel->getActiveSheet()->getStyle('F569')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F569', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F569')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L569')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L569', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L569')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G571')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G571', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G571')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P569')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P569', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P569')->getFont()->setSize(14);

//11

$objPHPExcel->getActiveSheet()->getStyle('F630')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F630', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F630')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L630')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L630', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L630')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G632')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G632', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G632')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P630')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P630', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P630')->getFont()->setSize(14);

//12

$objPHPExcel->getActiveSheet()->getStyle('F691')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('F691', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('F691')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('L691')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('L691', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('L691')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G693')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G693', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G693')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P691')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P691', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('P691')->getFont()->setSize(14);


echo "termine hoja 9 ";
?>