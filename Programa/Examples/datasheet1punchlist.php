<?php

echo date('H:i:s') . " Create new PHPExcel object\n";
//$objPHPExcel = new PHPExcel();
//$objPHPExcel->getSheet(0)->setTitle('Revenue');
$objPHPExcel->createSheet(1);
$objPHPExcel->getSheet(1)->setTitle('PUNCH LIST');

// Add some data to the second sheet, resembling some different data types
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->getActiveSheet()->getStyle('J3')->getFont()->setName('ARIAL BLACK');
$objPHPExcel->getActiveSheet()->setCellValue('J3', 'PUNCH LIST');
$objPHPExcel->getActiveSheet()->getStyle('J3')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('J3')->getFont()->setBold(true);
//$objPHPExcel->getActiveSheet()->getStyle('J3')->getFont()->setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);
$objPHPExcel->getActiveSheet()->getStyle('J3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('I3:K3')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THICK
 				)
			),
			//'fill' => array(
	 		//	'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
	  		//	'rotation'   => 90,
	 		//	'startcolor' => array(
	 		//		'argb' => 'FFA0A0A0'
	 		//	),
	 		//	'endcolor'   => array(
	 		//		'argb' => 'FFFFFFFF'
	 		//	)
	 		//)
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
$objPHPExcel->getActiveSheet()->getStyle('B2:S63')->applyFromArray($styleThinBlackBorderOutline);


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

// Set the worksheet tab color
echo date('H:i:s') , " Set the worksheet tab color" , EOL;
$objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FF66CD00');;


//cargar el margen delgado de todo lo que sigue abajo para la segunda hoja que es la de punch list
// Set thick brown border outline around "Total"
echo date('H:i:s') , " Set thick brown border outline around Total" , EOL;
$styleThinBrownBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		),
	),
);

//cargar el margen delgado de todo lo que sigue abajo para la segunda hoja que es la de punch list
// Set thick brown border outline around "Total"
echo date('H:i:s') , " Set thick border outline around Total" , EOL;
$stylethickBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THICK,
			'color' => array('argb' => 'FF000000'),
		),
	),
);


//borde doble para la segunda hoja punch list
// Set thin black border outline around column
echo date('H:i:s') , " Set thin black border outline around column" , EOL;
$styleBorderDoubleOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_DOUBLE,
			'color' => array('argb' => 'FF000000'),
		),
	),
);


//MARGEN DERECHO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C10:C32')->applyFromArray(
		array(
			
			'borders' => array(
				'right'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN DERECHO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('N10:N32')->applyFromArray(
		array(
			
			'borders' => array(
				'right'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN DERECHO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('P10:P32')->applyFromArray(
		array(
			
			'borders' => array(
				'right'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN DERECHO DOBLE 
// Set style for header row using alternative method
// Set thin black border outline around column
echo date('H:i:s') , " Set thin black border outline around column" , EOL;
$styleBorderDoubleOutlinerderecha = array(
	'borders' => array(
		'right' => array(
			'style' => PHPExcel_Style_Border::BORDER_DOUBLE,
			'color' => array('argb' => 'FF000000'),
		),
	),
);


//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C12:R12')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C13:R14')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C15:R16')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C17:R18')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C19:R20')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C21:R22')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C23:R24')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C25:R26')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C27:R28')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C29:R30')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);

//MARGEN ABAJO DELGADO SENCILLO
// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C31:R32')->applyFromArray(
		array(
			
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			
		)
);


// Set fills C6 A L6
 echo date('H:i:s') , " Set fills" , EOL;
 $objPHPExcel->getActiveSheet()->getStyle('C6:K6')->applyFromArray($styleThinBrownBorderOutline);
 $objPHPExcel->getActiveSheet()->getStyle('C6:K6')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

  // Set fills C7 A L7
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C7:K7')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C7:K7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

// Set fills M6
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('L6:M6')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L6:M6')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

// Set fills L7:M7
//echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('L7:M7')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L7:M7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

// Set fills N6 A R6
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('N6:R6')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('N6:R6')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

// Set fills N7 A R7
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('N7:R7')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('N7:R7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); 

// Set fills N7 A R7
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('N7:R7')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('N7:R7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); 

// Set fills N8 A P8
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('M9:P9')->applyFromArray($styleBorderDoubleOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('M9:P9')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('M9:P9')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO

// Set fills C10 A R60
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('L10:L32')->applyFromArray($styleBorderDoubleOutlinerderecha);


// Set fills C10 A C56
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('C10:R32')->applyFromArray($styleBorderDoubleOutline);


//RELLENO DE TITULOS DE LA LISTA
$objPHPExcel->getActiveSheet()->getStyle('C10:R12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C10:R12')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO


$objPHPExcel->getActiveSheet()->getStyle('C14')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C14', '1');
$objPHPExcel->getActiveSheet()->getStyle('C14')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C14')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C16')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C16', '2');
$objPHPExcel->getActiveSheet()->getStyle('C16')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C16')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C18')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C18', '3');
$objPHPExcel->getActiveSheet()->getStyle('C18')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C18')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C20')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C20', '4');
$objPHPExcel->getActiveSheet()->getStyle('C20')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C20')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C22')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C22', '5');
$objPHPExcel->getActiveSheet()->getStyle('C22')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C22')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C24')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C24', '6');
$objPHPExcel->getActiveSheet()->getStyle('C24')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C24')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C26')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C26', '7');
$objPHPExcel->getActiveSheet()->getStyle('C26')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C26')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C28')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C28', '8');
$objPHPExcel->getActiveSheet()->getStyle('C28')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C28')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C30')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C30', '9');
$objPHPExcel->getActiveSheet()->getStyle('C30')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C30')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('C32')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C32', '10');
$objPHPExcel->getActiveSheet()->getStyle('C32')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C32')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$objPHPExcel->getActiveSheet()->getStyle('F6')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('F6', 'Network Element');
$objPHPExcel->getActiveSheet()->getStyle('F6')->getFont()->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('F6')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('F7')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('F7', 'Nodo Iden');
$objPHPExcel->getActiveSheet()->getStyle('F7')->getFont()->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('F7')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('L6')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('L6', 'SITE_ID');
$objPHPExcel->getActiveSheet()->getStyle('L6')->getFont()->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('L6')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('L6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('L7')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('L7', 'Site_NAME');
$objPHPExcel->getActiveSheet()->getStyle('L7')->getFont()->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('L7')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('L7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('M9')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('M9', 'RESPONSABLE DE ACTIVIDAD');
$objPHPExcel->getActiveSheet()->getStyle('M9')->getFont()->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('M9')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C11')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('C11', 'Item');
$objPHPExcel->getActiveSheet()->getStyle('C11')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('C11')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C11')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('G11')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('G11', 'Issues Detectados');
$objPHPExcel->getActiveSheet()->getStyle('G11')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('G11')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G11')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('M11')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('M11', 'Proveedor');
$objPHPExcel->getActiveSheet()->getStyle('M11')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('M11')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('M11')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$objPHPExcel->getActiveSheet()->getStyle('O11')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('O11', 'Fops');
$objPHPExcel->getActiveSheet()->getStyle('O11')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('O11')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('O11')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('Q11')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('Q11', ' Fecha de   ');
$objPHPExcel->getActiveSheet()->getStyle('Q11')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('Q11')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('Q12')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('Q12', ' Correccion');
$objPHPExcel->getActiveSheet()->getStyle('Q12')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('Q12')->getFont()->setBold(true);

//=====================================================================================================
	$nombre_sitio_2g = $_POST['nombre_sitio_2g'];
	
	//$tipo_sitio = $_POST['tipo_sitio'];

	//$nombre_sitio_3g = $_POST['nombre_sitio_3g'];
	
	//$propiedad = $_POST['propiedad'];

	//$direccion = $_POST['direccion'];

	$id2g = $_POST['id2g'];

	//$ubicacion = $_POST['ubicacion'];

	//$id3g = $_POST['id3g'];

	//$num_emp = $_POST['num_emp'];

	//$fecha = date ("Y-m-d");


	//$ingeniero = $_POST['ingeniero'];

	//echo "{$usuario}" : "{contrasena}";

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


//	$ingeniero = $_POST['ingeniero'];

	//echo "{$usuario}" : "{contrasena}";

$objPHPExcel->getActiveSheet()->getStyle('O7')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O7', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('O7')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('O6')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O6', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('O6')->getFont()->setSize(14);

?>