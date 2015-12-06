<?php
echo "inicio hoja 10  ";
$objPHPExcel->createSheet(10);
$objPHPExcel->getSheet(10)->setTitle('Transporte - Microwave');

// Add some data to the second sheet, resembling some different data types
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(10);

include "layout.php";

// Set the worksheet tab color
echo date('H:i:s') , " Set the worksheet tab color" , EOL;
$objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FFFFFFFF');;



$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('I5')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I5', 'REPORTE FOTOGRAFICO MICROWAVE');
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
$objPHPExcel->getActiveSheet()->setCellValue('I71', 'REPORTE FOTOGRAFICO DACS');
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
$objPHPExcel->getActiveSheet()->setCellValue('I136', 'REPORTE FOTOGRAFICO TELLABS');
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

//======================================================================================================
//LLENADO DE CAMPOS EN CADA FOTO
//FOTO1
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E31', 'MW RACK FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO2
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N31', 'MW RACK POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO3
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E46', 'ATERRIZAJE DC RACK');
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO4
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N46', 'PATH AISLANTE');
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO5
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E61', 'MW DSX FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO6
$objPHPExcel->getActiveSheet()->getStyle('N61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N61', 'MW DSX POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO7
$objPHPExcel->getActiveSheet()->getStyle('D97')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D97', 'EQUIPO DACS VISTA FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('D97')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D97')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO8
$objPHPExcel->getActiveSheet()->getStyle('M97')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M97', 'EQUIPO DACS VISTA POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('M97')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M97')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO9
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E112', 'PATH AISLANTE');
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO10
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N112', 'ATERRIZAJE DE EQUIPO');
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N112')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO11
$objPHPExcel->getActiveSheet()->getStyle('F127')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('F127', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('F127')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('F127')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO12
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O127', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO13
$objPHPExcel->getActiveSheet()->getStyle('D161')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D161', 'EQUIPO TELLABS VISTA FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('D161')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D161')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO14
$objPHPExcel->getActiveSheet()->getStyle('M161')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('M161', 'EQUIPO TELLABS VISTA POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('M161')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('M161')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO15
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E176', 'PATH AISLANTE');
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E176')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO16
$objPHPExcel->getActiveSheet()->getStyle('N176')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N176', 'ATERRIZAJE DE EQUIPO');
$objPHPExcel->getActiveSheet()->getStyle('N176')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N176')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO17
$objPHPExcel->getActiveSheet()->getStyle('F191')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('F191', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('F191')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('F191')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO18
$objPHPExcel->getActiveSheet()->getStyle('O191')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O191', 'OTRO');
$objPHPExcel->getActiveSheet()->getStyle('O191')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O191')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//=========================================EMPIEZAN LAS FOTOS DE MW==============================
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW RACK FRONTAL.JPG');
$objDrawing->setCoordinates('C17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW RACK POSTERIOR.JPG');
$objDrawing->setCoordinates('L17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW ATERRIZAJE DE RACK.JPG');
$objDrawing->setCoordinates('C32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW PATH AISLANTE.JPG');
$objDrawing->setCoordinates('L32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW DSX FRONTAL.JPG');
$objDrawing->setCoordinates('C47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW DSX POSTERIOR.JPG');
$objDrawing->setCoordinates('L47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW DACS VISTA FRONTAL.JPG');
$objDrawing->setCoordinates('C83');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW DACS VISTA POSTERIOR.JPG');
$objDrawing->setCoordinates('L83');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW DACS PATH AISLANTE.JPG');
$objDrawing->setCoordinates('C98');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW DACS ATERRIZAJE DE EQUIPO.JPG');
$objDrawing->setCoordinates('L98');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW DACS OTRO1.JPG');
$objDrawing->setCoordinates('C113');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW DACS OTRO2.JPG');
$objDrawing->setCoordinates('L113');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW TELLABS VISTA FRONTAL.JPG');
$objDrawing->setCoordinates('C147');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW TELLABS VISTA POSTERIOR.JPG');
$objDrawing->setCoordinates('L147');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW TELLABS PATH AISLANTE.JPG');
$objDrawing->setCoordinates('C162');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW TELLABS ATERRIZAJE DE EQUIPO.JPG');
$objDrawing->setCoordinates('L162');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW TELLABS OTRO1.JPG');
$objDrawing->setCoordinates('C177');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/MW TELLABS OTRO2.JPG');
$objDrawing->setCoordinates('L177');
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

 

echo "termine hoja 10";
?>