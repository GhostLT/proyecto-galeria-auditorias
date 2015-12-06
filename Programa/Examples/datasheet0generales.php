<?php

/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2013 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2013 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.9, 2013-06-02
 */

/** Error reporting */
error_reporting(E_ALL);

/** Include PHPExcel */
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';


// Create new PHPExcel object
//echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();

// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");


// Create a first sheet, representing sales data
echo date('H:i:s') , " Add some data" , EOL;
/*$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Invoice');
$objPHPExcel->getActiveSheet()->setCellValue('D1', PHPExcel_Shared_Date::PHPToExcel( gmmktime(0,0,0,date('m'),date('d'),date('Y')) ));
$objPHPExcel->getActiveSheet()->getStyle('D1')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX15);
$objPHPExcel->getActiveSheet()->setCellValue('E1', '#12566');*/

// Merge cells
//echo date('H:i:s') , " Merge cells" , EOL;
//$objPHPExcel->getActiveSheet()->mergeCells('B2:S7');
$objPHPExcel->getActiveSheet()->setShowGridlines(false);


$objPHPExcel->getActiveSheet()->getStyle('I8')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('I8', 'REPORTE DE AUDITORIA EN SITIO');
$objPHPExcel->getActiveSheet()->getStyle('I8')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('I8')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C13')->getFont()->setName('Arial Black');
$objPHPExcel->getActiveSheet()->setCellValue('C13', 'DATOS GENERALES:');
$objPHPExcel->getActiveSheet()->getStyle('C13')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C13')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->setCellValue('C17', 'NOMBRE DEL SITIO IDEN');
$objPHPExcel->getActiveSheet()->getStyle('C17')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('C17')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('G17:J17')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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


$objPHPExcel->getActiveSheet()->setCellValue('C19', 'NOMBRE DEL SITIO 3G');
$objPHPExcel->getActiveSheet()->getStyle('C19')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('C19')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('G19:J19')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('C21', 'DIRECCION');
$objPHPExcel->getActiveSheet()->getStyle('C21')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('C21')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('G21:J21')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('C23', 'INGENIERO RESPONSABLE');
$objPHPExcel->getActiveSheet()->getStyle('C23')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('C23')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('G23:J23')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('C25', 'UBICACION');
$objPHPExcel->getActiveSheet()->getStyle('C25')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('C25')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('G25:J25')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('C27', 'TIPO DE SITIO');
$objPHPExcel->getActiveSheet()->getStyle('C27')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('C27')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('G27:J27')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('C29', 'PROPIEDAD');
$objPHPExcel->getActiveSheet()->getStyle('C29')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('C29')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('G29:J29')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('K17', 'IDEN SITE ID:');
$objPHPExcel->getActiveSheet()->getStyle('K17')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('K17')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('M17:N17')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('K19', '3G SITE ID:');
$objPHPExcel->getActiveSheet()->getStyle('K19')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('K19')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('M19:N19')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('P17', 'FECHA:');
$objPHPExcel->getActiveSheet()->getStyle('P17')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('P17')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('Q17:R17')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('P19', 'FECHA:');
$objPHPExcel->getActiveSheet()->getStyle('P19')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('P19')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('Q19:R19')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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

$objPHPExcel->getActiveSheet()->setCellValue('O23', 'ID:');
$objPHPExcel->getActiveSheet()->getStyle('O23')->getFont()->setSize(14);
//$objPHPExcel->getActiveSheet()->getStyle('O23')->getFont()->setBold(true);

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('P23:R23')->applyFromArray(
		array(
			//'font'    => array(
			//	'bold'      => true
			//),
			//'alignment' => array(
			//	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			//),
			'borders' => array(
				'bottom'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
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


$objPHPExcel->getActiveSheet()->getStyle('J36')->getFont()->setName('Calibri');
$objPHPExcel->getActiveSheet()->setCellValue('J36', 'ALCANCE DE AUDITORIA');
$objPHPExcel->getActiveSheet()->getStyle('J36')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('J36')->getFont()->setBold(true);

echo date('H:i:s') , " Set thick brown border outline around Total" , EOL;
$styleThickBrownBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THICK,
			'color' => array('argb' => 'FF000000'),
		),
	),
);

// Set fills
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('G36:O36')->applyFromArray($styleThickBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('G36:O36')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('G36:O36')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO

$objPHPExcel->getActiveSheet()->getStyle('C42')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C42', '1');
$objPHPExcel->getActiveSheet()->getStyle('C42')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C42')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C42')->getFont()->setBold(true);


$objPHPExcel->getActiveSheet()->getStyle('D42')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D42', 'Predio');
$objPHPExcel->getActiveSheet()->getStyle('D42')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('D42')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C44')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C44', '2');
$objPHPExcel->getActiveSheet()->getStyle('C44')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C44')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C44')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('D44')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D44', 'Suestacion y Acometida');
$objPHPExcel->getActiveSheet()->getStyle('D44')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('D44')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C46')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C46', '3');
$objPHPExcel->getActiveSheet()->getStyle('C46')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C46')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C46')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('D46')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D46', 'Shelter EBTS,Telco,Pop');
$objPHPExcel->getActiveSheet()->getStyle('D46')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('D46')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C48')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C48', '4');
$objPHPExcel->getActiveSheet()->getStyle('C48')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C48')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C48')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('D48')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D48', 'Generador');
$objPHPExcel->getActiveSheet()->getStyle('D48')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('D48')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C50')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C50', '5');
$objPHPExcel->getActiveSheet()->getStyle('C50')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C50')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C50')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('D50')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D50', 'Torre');
$objPHPExcel->getActiveSheet()->getStyle('D50')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('D50')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C52')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C52', '6');
$objPHPExcel->getActiveSheet()->getStyle('C52')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C52')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C52')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('D52')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D52', 'DC Power Plant');
$objPHPExcel->getActiveSheet()->getStyle('D52')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('D52')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C54')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C54', '7');
$objPHPExcel->getActiveSheet()->getStyle('C54')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C54')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C54')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('D54')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D54', 'Transporte Microwave,Dacs,Tellabs');
$objPHPExcel->getActiveSheet()->getStyle('D54')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('D54')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C56')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C56', '8');
$objPHPExcel->getActiveSheet()->getStyle('C56')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C56')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C56')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('D56')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D56', 'SITE');
$objPHPExcel->getActiveSheet()->getStyle('D56')->getFont()->setSize(16);
//$objPHPExcel->getActiveSheet()->getStyle('D56')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('C58')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C58', '9');
$objPHPExcel->getActiveSheet()->getStyle('C58')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C58')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getActiveSheet()->getStyle('C58')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('D58')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('D58', 'EVOLUTION NODEB,RTN,CX600,APM30');
$objPHPExcel->getActiveSheet()->getStyle('D58')->getFont()->setSize(16);


$objPHPExcel->getActiveSheet()->getStyle('B5')->getAlignment()->setShrinkToFit(true);

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
//$objPHPExcel->getActiveSheet()->getStyle('G8:O8')->applyFromArray($styleThickBrownBorderOutline);

// Set fills
echo date('H:i:s') , " Set fills" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('H8:N8')->applyFromArray($styleThickBrownBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('H8:N8')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H8:N8')->getFill()->getStartColor()->setARGB('FFFFCC00');//RELLENO

//$objPHPExcel->getActiveSheet()->getStyle('H8:N8')->applyFromArray($styleThinBlackBorderOutline);

// Set thick brown border outline around "REPORTE DE AUDITORIA EN SITIO"
/*$styleThickBrownBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::FILL_SOLID,
			'color' => array('argb' => 'FFFFCC00'),
		),
	),
);*/

// Set style for header row using alternative method
echo date('H:i:s') , " Set style for header row using alternative method" , EOL;
$objPHPExcel->getActiveSheet()->getStyle('B2:S2')->applyFromArray(
		array(
			'font'    => array(
				'bold'      => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			),
			'borders' => array(
				'top'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_DOUBLE
 				)
			),
			'fill' => array(
	 			'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
	  			'rotation'   => 90,
	 			'startcolor' => array(
	 				'argb' => 'FFA0A0A0'
	 			),
	 			'endcolor'   => array(
	 				'argb' => 'FFCCCCCC'
	 			)
	 		)
		)
);

/*$objPHPExcel->getActiveSheet()->getStyle('H8')->applyFromArray(
		array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
			),
			'borders' => array(
				'left'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_DOUBLE
 				)
			)
		)
);*/

$objPHPExcel->getActiveSheet()->getStyle('B3')->applyFromArray(
		array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
			)
		)
);

/*$objPHPExcel->getActiveSheet()->getStyle('H8')->applyFromArray(
		array(
			'borders' => array(
				'right'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_DOUBLE
 				)
			)
		)
);*/

// Unprotect a cell
//echo date('H:i:s') , " Unprotect a cell" , EOL;
//$objPHPExcel->getActiveSheet()->getStyle('B1')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);

// Add a hyperlink to the sheet
/*echo date('H:i:s') , " Add a hyperlink to the sheet" , EOL;
$objPHPExcel->getActiveSheet()->setCellValue('E26', 'www.phpexcel.net');
$objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setUrl('http://www.phpexcel.net');
$objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setTooltip('Navigate to website');
$objPHPExcel->getActiveSheet()->getStyle('E26')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

$objPHPExcel->getActiveSheet()->setCellValue('E27', 'Terms and conditions');
$objPHPExcel->getActiveSheet()->getCell('E27')->getHyperlink()->setUrl("sheet://'Terms and conditions'!A1");
$objPHPExcel->getActiveSheet()->getCell('E27')->getHyperlink()->setTooltip('Review terms and conditions');
$objPHPExcel->getActiveSheet()->getStyle('E27')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);*/

// Add a drawing to the worksheet
echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(50);
$objDrawing->setCoordinates('C3');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());



// Add a drawing to the worksheet
/*echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Paid');
$objDrawing->setDescription('Paid');
$objDrawing->setPath('./images/paid.png');
$objDrawing->setCoordinates('B15');
$objDrawing->setOffsetX(110);
$objDrawing->setRotation(25);
$objDrawing->getShadow()->setVisible(true);
$objDrawing->getShadow()->setDirection(45);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());*/

// Add a drawing to the worksheet
/*echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('PHPExcel logo');
$objDrawing->setDescription('PHPExcel logo');
$objDrawing->setPath('./images/nextel2.jpg');
$objDrawing->setHeight(50);
$objDrawing->setCoordinates('M19');
$objDrawing->setOffsetX(10);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());*/

// Play around with inserting and removing rows and columns
echo date('H:i:s') , " Play around with inserting and removing rows and columns" , EOL;
$objPHPExcel->getActiveSheet()->insertNewRowBefore(6, 10);
$objPHPExcel->getActiveSheet()->removeRow(6, 10);
$objPHPExcel->getActiveSheet()->insertNewColumnBefore('H', 8);
$objPHPExcel->getActiveSheet()->removeColumn('H', 8);

// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
echo date('H:i:s') , " Set header/footer" , EOL;
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&BInvoice&RPrinted on &D');
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

// Set page orientation and size
echo date('H:i:s') , " Set page orientation and size" , EOL;
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

// Rename first worksheet
echo date('H:i:s') , " Rename first worksheet" , EOL;
$objPHPExcel->getActiveSheet()->setTitle('GENERALES');


// Create a new worksheet, after the default sheet
echo date('H:i:s') , " Create a second Worksheet object" , EOL;
$objPHPExcel->createSheet();

// Llorem ipsum...
//$sLloremIpsum = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus eget ante. Sed cursus nunc semper tortor. Aliquam luctus purus non elit. Fusce vel elit commodo sapien dignissim dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur accumsan magna sed massa. Nullam bibendum quam ac ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin augue. Praesent malesuada justo sed orci. Pellentesque lacus ligula, sodales quis, ultricies a, ultricies vitae, elit. Sed luctus consectetuer dolor. Vivamus vel sem ut nisi sodales accumsan. Nunc et felis. Suspendisse semper viverra odio. Morbi at odio. Integer a orci a purus venenatis molestie. Nam mattis. Praesent rhoncus, nisi vel mattis auctor, neque nisi faucibus sem, non dapibus elit pede ac nisl. Cras turpis.';

// Add some data to the second sheet, resembling some different data types
//echo date('H:i:s') , " Add some data" , EOL;
//$objPHPExcel->setActiveSheetIndex(1);
//$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Terms and conditions');
//$objPHPExcel->getActiveSheet()->setCellValue('A3', $sLloremIpsum);
//$objPHPExcel->getActiveSheet()->setCellValue('A4', $sLloremIpsum);
//$objPHPExcel->getActiveSheet()->setCellValue('A5', $sLloremIpsum);
//$objPHPExcel->getActiveSheet()->setCellValue('A6', $sLloremIpsum);

// Set the worksheet tab color
//echo date('H:i:s') , " Set the worksheet tab color" , EOL;
$objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FF66CD00');;

// Set alignments
//echo date('H:i:s') , " Set alignments" , EOL;
//$objPHPExcel->getActiveSheet()->getStyle('A3:A6')->getAlignment()->setWrapText(true);

// Set column widths
//echo date('H:i:s') , " Set column widths" , EOL;
//$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(80);

// Set fonts
//echo date('H:i:s') , " Set fonts" , EOL;
//$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setName('Candara');
//$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
//$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
//$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);

//$objPHPExcel->getActiveSheet()->getStyle('A3:A6')->getFont()->setSize(8);

// Add a drawing to the worksheet
/*echo date('H:i:s') , " Add a drawing to the worksheet" , EOL;
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Terms and conditions');
$objDrawing->setDescription('Terms and conditions');
$objDrawing->setPath('./images/termsconditions.jpg');
$objDrawing->setCoordinates('B14');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());*/

// Set page orientation and size
//echo date('H:i:s') , " Set page orientation and size" , EOL;
//$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
//$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

// Rename second worksheet
//echo date('H:i:s') , " Rename second worksheet" , EOL;
//$objPHPExcel->getActiveSheet()->setTitle('GENERALES');
    $nombre_sitio_2g = $_POST['nombre_sitio_2g']; //este
	
	$tipo_sitio = $_POST['tipo_sitio'];
	
	$nombre_sitio_3g = $_POST['nombre_sitio_3g'];
	
	$propiedad = $_POST['propiedad'];
	
	$direccion = $_POST['direccion'];

	$id2g = $_POST['id2g'];  //este

	$ubicacion = $_POST['ubicacion'];

	$id3g = $_POST['id3g'];

	$num_emp = $_POST['num_emp'];

	$ingeniero = $_POST['ingeniero']; //este

	$fecha = date ("Y-m-d");	
	//echo "{$usuario}" : "{contrasena}";
$objPHPExcel->getActiveSheet()->getStyle('G17')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G17', strtoupper($nombre_sitio_2g));
$objPHPExcel->getActiveSheet()->getStyle('G17')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G19')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G19', strtoupper($nombre_sitio_3g));
$objPHPExcel->getActiveSheet()->getStyle('G19')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('M17')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('M17', strtoupper($id2g));
$objPHPExcel->getActiveSheet()->getStyle('M17')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('M19')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('M19', strtoupper($id3g));
$objPHPExcel->getActiveSheet()->getStyle('M19')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('G21')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G21', strtoupper($direccion));
$objPHPExcel->getActiveSheet()->getStyle('G21')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G23')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G23', strtoupper($ingeniero));
$objPHPExcel->getActiveSheet()->getStyle('G23')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G25')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G25', strtoupper($ubicacion));
$objPHPExcel->getActiveSheet()->getStyle('G25')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G27')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G27', strtoupper($tipo_sitio));
$objPHPExcel->getActiveSheet()->getStyle('G27')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('G29')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('G29', strtoupper($propiedad));
$objPHPExcel->getActiveSheet()->getStyle('G29')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('P23')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('P23', strtoupper($num_emp));
$objPHPExcel->getActiveSheet()->getStyle('P23')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('Q17')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('Q17', strtoupper($fecha));
$objPHPExcel->getActiveSheet()->getStyle('Q17')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('Q19')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('Q19', $fecha);
$objPHPExcel->getActiveSheet()->getStyle('Q19')->getFont()->setSize(14);
//==============================================================================================


?>