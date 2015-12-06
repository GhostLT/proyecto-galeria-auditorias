<?php

include("conexion.php");

	
	$conexion = mysql_connect($host,$user,$pw) or die ("problema al conectar al host");
	mysql_select_db($bd,$conexion) or die ("problemas al conectar la base de datos");//conectamos la base de datos
	$id_local = $_POST['ID_LOCAL'];
	$registro = mysql_query("SELECT * FROM tabla_datos_generales WHERE ID_LOCAL = '$id_local'");
	
	echo'<table border=1>';
	echo'<tr>';
	echo'<th style="background-color:gray ;color:white">';echo"ID LOCAL";echo'</th>';
	echo'<th style="background-color:gray ;color:white">';echo"NOMBRE LOCAL";echo'</th>';
	echo'<th style="background-color:gray ;color:white">';echo"ID REMOTO";echo'</th>';
	echo'<th style="background-color:gray ;color:white">';echo"NOMBRE REMOTO";echo'</th>';
	echo'<th style="background-color:gray ;color:white">';echo"NIVELES OT RX LADO A";echo'</th>';
	echo'<th style="background-color:gray ;color:white">';echo"NIVELES OT RX LADO B";echo'</th>';
	echo'<th style="background-color:gray ;color:white">';echo"MARCA";echo'</th>';
	echo'<th style="background-color:gray ;color:white">';echo"COORD";echo'</th>';
	echo'<th style="background-color:gray ;color:white">';echo"RESPONSABLE";echo'</th>';

	while($reg=mysql_fetch_array($registro))
	{


		 echo'<tr>';

		 echo '<td>'; echo $reg['ID_LOCAL']; echo '</td>';
		 echo '<td>'; echo $reg['NOMBRE_LOCAL']; echo '</td>';
		 echo '<td>'; echo $reg['ID_REMOTO']; echo '</td>';
		 echo '<td>'; echo $reg['NOMBRE_REMOTO']; echo '</td>';
		 echo '<td style="color:lime;text-align:center">'; echo $reg['NIVELES_OT_RX_LADO_A']; echo '</td>';
		 echo '<td style="color:lime;text-align:center"	>'; echo $reg['NIVELES_OT_RX_LADO_B']; echo '</td>';
		 echo '<td>'; echo $reg['MARCA']; echo '</td>';
		 echo '<td>'; echo $reg['COORD']; echo '</td>';
		 echo '<td>'; echo $reg['RESPONSABLE']; echo '</td>';

		 echo'<tr>';
	}


echo '</table>';

require_once '../Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("test.xlsx");

foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
$worksheetTitle     = $worksheet->getTitle();
$highestRow         = $worksheet->getHighestRow(); // e.g. 10
$highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
$nrColumns = ord($highestColumn) - 64;
echo "<br>The worksheet ".$worksheetTitle." has ";
echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
echo ' and ' . $highestRow . ' row.';
echo '<br>Data: <table border="1"><tr>';
for ($row = 1; $row <= $highestRow; ++ $row) {
echo '<tr>';
for ($col = 0; $col < $highestColumnIndex; ++ $col) {
$cell = $worksheet->getCellByColumnAndRow($col, $row);
$val = $cell->getValue();
$dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
echo '<td>' . $val . '<br>(Typ ' . $dataType . ')</td>';
}
echo '</tr>';
}
echo '</table>';
}


?>	



