<?php 
set_time_limit(0);
/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('America/Los_Angeles');

include "formato.inc.php";

require_once '../Classes/PHPExcel/IOFactory.php';

//$prueba = new PHPExcel(); 
//$prueba->setActiveSheetIndex(0)->setCellValue("A1","PRUEBA"); 

//$prueba->getActiveSheet()->setTitle("Hoja de prueba"); 
// Save Excel 2007 file
//echo date('H:i:s') . " Write to Excel2007 format\n";
//$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
//PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP); 
//echo PHPExcel_Settings::getZipClass();

// Save Excel 95 file
echo date('H:i:s') , " Write to Excel5 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;
//echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 32768 / 32768) , " MB" , EOL;
//ini_set('memory_limit', '-1');
//ini_set('memory_limit', '-1');
//ini_set("memory_limit","12M");

// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;
//echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 32768 / 32768) , " MB" , EOL;
//echo date('H:i:s') , " Peak memory usage: " , (memory_limit = 12M) , " MB" , EOL;
//ini_set('memory_limit', '128M');


// Echo done
echo date('H:i:s') , " Done writing file" , EOL;
echo 'File has been created in ' , getcwd() , EOL;

