<?php

$objPHPExcel->getActiveSheet()->getStyle('C8')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C8', 'DATOS GENERALES');
$objPHPExcel->getActiveSheet()->getStyle('C8')->getFont()->setSize(14);

$objPHPExcel->getActiveSheet()->getStyle('C10')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C10', 'NOMBRE DEL SITIO:');

$objPHPExcel->getActiveSheet()->getStyle('C12')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('C12', 'INGENIERO RESPONSABLE:');

$objPHPExcel->getActiveSheet()->getStyle('K10')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('K10', 'SITE ID:');

$objPHPExcel->getActiveSheet()->getStyle('O10')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('O10', 'FECHA:');

$objPHPExcel->getActiveSheet()->getStyle('M12')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->setCellValue('M12', 'FECHA DE CORRECCION:');

?>