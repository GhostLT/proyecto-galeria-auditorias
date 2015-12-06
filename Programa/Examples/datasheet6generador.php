<?php
echo"AQUI NOMBRO LA HOJA 6";
$objPHPExcel->createSheet(6);
$objPHPExcel->getSheet(6)->setTitle('Generador');

// Add some data to the second sheet, resembling some different data types
echo date('H:i:s') , " Add some data" , EOL;
echo "AQUI EMPIEZO A ESCRIBIR SOBRE LA HOJA 6";
$objPHPExcel->setActiveSheetIndex(6);

include "layout.php";

// Set the worksheet tab color
echo date('H:i:s') , " Set the worksheet tab color" , EOL;
$objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FFFFFFFF');;



$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->applyFromArray($styleGRUESOBorderOutline);
//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H5:M5')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO
$objPHPExcel->getActiveSheet()->getStyle('H5')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('H5', 'REPORTE FOTOGRAFICO GENERADOR');
$objPHPExcel->getActiveSheet()->getStyle('H5')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('H5')->getFont()->setBold(true);

include "datosgenerales.php";

$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('P12:S12')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO

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
$objPHPExcel->getActiveSheet()->getStyle('H71')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('H71', 'REPORTE FOTOGRAFICO GENERADOR');
$objPHPExcel->getActiveSheet()->getStyle('H71')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('H71')->getFont()->setBold(true);


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


$objPHPExcel->getActiveSheet()->getStyle('C83:I96')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C98:I111')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C113:I126')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L83:R96')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L98:R111')->applyFromArray($styleThinBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L113:R126')->applyFromArray($styleThinBrownBorderOutline);

//======================================================================================================
//LLENADO DE CAMPOS EN CADA FOTO
//FOTO1
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E31', 'GENERADOR FRONTAL');
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO2
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N31', 'GENERADOR POSTERIOR');
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N31')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO3
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E46', 'GENERADOR LATERAL DER');
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO4
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('N46', 'GENERADOR LATERAL IZQ');
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('N46')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO5
$objPHPExcel->getActiveSheet()->getStyle('D61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('D61', 'GENERADOR ETIQUETA (MODELO,SN)');
$objPHPExcel->getActiveSheet()->getStyle('D61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('D61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO6
$objPHPExcel->getActiveSheet()->getStyle('L61')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('L61', 'GENERADOR INTERIOR, MEDIDOR COMBUSTIBLE');
$objPHPExcel->getActiveSheet()->getStyle('L61')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('L61')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//FOTO7
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E97', 'GENERADOR TANQUE EXTERNO');
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO8
$objPHPExcel->getActiveSheet()->getStyle('L97')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('L97', 'GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE');
$objPHPExcel->getActiveSheet()->getStyle('L97')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('L97')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO9
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E112', 'MODULO TRANSFERENCIA');
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO10
$objPHPExcel->getActiveSheet()->getStyle('L112')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('L112', 'TRANSFERENCIA ETIQUETA(MODULO,SN)');
$objPHPExcel->getActiveSheet()->getStyle('L112')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('L112')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO11
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('E127', 'PROTECCION GENERADOR');
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('E127')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );
//FOTO12
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->setName('Arial black');
$objPHPExcel->getActiveSheet()->setCellValue('O127', 'HOROMETRO');
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('O127')->getFont()->getColor()->applyFromArray( array('rgb' => '1874CD') );

//======================================================================================================
//=========================================AGREGAR FOTOS============================================
include "renombraryajustar.php";

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR FRONTAL.JPG');
$objDrawing->setCoordinates('C17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR POSTERIOR.JPG');
$objDrawing->setCoordinates('L17');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR LATERAL DER.JPG');
$objDrawing->setCoordinates('C32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR LATERAL IZQ.JPG');
$objDrawing->setCoordinates('L32');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR ETIQUETA(MODELO,SN).JPG');
$objDrawing->setCoordinates('C47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR MEDIDOR COMBUSTIBLE.JPG');
$objDrawing->setCoordinates('L47');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR TANQUE EXTERNO.JPG');
$objDrawing->setCoordinates('C83');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE.JPG');
$objDrawing->setCoordinates('L83');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR MODULO TRANSFERENCIA.JPG');
$objDrawing->setCoordinates('C98');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN).JPG');
$objDrawing->setCoordinates('L98');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/GENERADOR PROTECCION.JPG');
$objDrawing->setCoordinates('C113');
$objDrawing->setOffsetY(1);
$objDrawing->setOffsetX(1);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./fotos/temporal/HOROMETRO.JPG');
$objDrawing->setCoordinates('L113');
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


echo "Termine la hoja 6";

?>