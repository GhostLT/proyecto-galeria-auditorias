<?php

$imagen=array(
//le cambio el nombre a todas las fotos
    //==============================FOTOS DATASHEET 3PREDIO=======================================
        "0"=>"PREDIO VISTA FRONTAL",
        "1"=>"PREDIO VISTA POSTERIOR", 
        "2"=>"PREDIO LATERAL IZQ",
        "3"=>"PREDIO LATERAL DER",
        "4"=>"PREDIO PASADOR PRINCIPAL",
        "5"=>"PREDIO PASADOR ADICIONAL",
        "6"=>"PREDIO CONCERTINA 1", 
        "7"=>"PREDIO CONCERTINA 2", 
        "8"=>"PREDIO PORTON DE ACCESO",
        "9"=>"PREDIO PORTON DE ACCESO SECUNDARIA",
        "10"=>"PREDIO OTROS",
        "11"=>"PREDIO OTROS2",
    //==============================FOTOS  DATASHEET4 SUBESTACION============================================
        "12"=>"SUB NICHO MEDIDOR FRONTAL", 
        "13"=>"SUB NICHO TERMOMAGNETICO POSTERIOR", 
        "14"=>"SUB MEDIDOR DE LUZ",
        "15"=>"SUB TERMOMAGNETICO Y CUCHILLAS",
        "16"=>"SUB SUBESTACION ELECTRICA",
        "17"=>"SUB ACOMETIDA ELECTRICA",
        "18"=>"SUB POSTE O BASE DE TRANSFORMADOR", 
        "19"=>"SUB ATERRIZAJE", 
        "20"=>"SUB OTROS1",
        "21"=>"SUB OTROS2",
        "22"=>"SUB OTROS3",
        "23"=>"SUB OTROS4",
        //==========================================================================================
        "24"=>"SHELTER CASETA IDEN FRONTAL", 
        "25"=>"SHELTER CASETA IDEN POSTERIOR", 
        "26"=>"SHELTER CASETA IDEN LATERAL DER",
        "27"=>"SHELTER CASETA IDEN LATERAL IZQ",
        "28"=>"SHELTER EQUIPOS HVAC CASETA IDEN",
        "29"=>"SHELTER PASAMUROS Y BARRA CASETA IDEN Y 3G",
        "30"=>"SHELTER PUERTA", 
        "31"=>"SHELTER BOTA AGUAS", 
        "32"=>"SHELTER LAMPARA EXTERIOR",
        "33"=>"SHELTER LAMPARA SUBURBANA",
        "34"=>"SHELTER PASAMUROS1",
        "35"=>"SHELTER PASAMUROS2",
        "36"=>"CASETA TELCO PUERTA", 
        "37"=>"CASETA TELCO BOTA AGUAS", 
        "38"=>"CASETA TELCO LAMPARA EXTERIOR",
        "39"=>"CASETA TELCO LAMPARA SUBURBANA",
        "40"=>"CASETA TELCO PASAMUROS1",
        "41"=>"CASETA TELCO PASAMUROS2",
        "42"=>"CASETA TELCO CASETA FRONTAL", 
        "43"=>"CASETA TELCO CASETA POSTERIOR", 
        "44"=>"CASETA TELCO CASETA LATERAL DER",
        "45"=>"CASETA TELCO CASETA LATERAL IZQ",
        "46"=>"CASETA TELCO EQUIPOS HVAC",
        "47"=>"CASETA TELCO PASAMUROS Y BARRA CASETA TELCO",
        "48"=>"CASETA POP FRONTAL", 
        "49"=>"CASETA POP POSTERIOR", 
        "50"=>"CASETA POP LATERAL DER",
        "51"=>"CASETA POP LATERAL IZQ",
        "52"=>"CASETA POP EQUIPOS HVAC",
        "53"=>"CASETA POP PASAMUROS Y BARRA",
        "54"=>"CASETA HUB FRONTAL",
        "55"=>"CASETA HUB POSTERIOR",
        "56"=>"CASETA HUB LATERAL DER", 
        "57"=>"CASETA HUB LATERAL IZQ", 
        "58"=>"CASETA HUB EQUIPOS HVAC"
        /*"59"=>"CASETA HUB PASAMUROS Y BARRA",
        "60"=>"GENERADOR FRONTAL",
        "61"=>"GENERADOR POSTERIOR", 
        "62"=>"GENERADOR LATERAL DER", 
        "63"=>"GENERADOR LATERAL IZQ",
        "64"=>"GENERADOR ETIQUETA(MODELO,SN)",
        "65"=>"GENERADOR MEDIDOR COMBUSTIBLE",
        "66"=>"GENERADOR TANQUE EXTERNO",
        "67"=>"GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE", 
        "68"=>"GENERADOR MODULO TRANSFERENCIA", 
        "69"=>"GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN)",
        "70"=>"GENERADOR PROTECCION",
        "71"=>"HOROMETRO",
        "72"=>"TORRE CARA A",
        "73"=>"ATERRIZAJE DE PIERNAS CARA A", 
        "74"=>"TORRE CARA B", 
        "75"=>"ATERRIZAJE DE PIERNAS CARA B",
        "76"=>"TORRE CARA C",
        "77"=>"ATERRIZAJE DE PIERNAS CARA C",
        "78"=>"TORRE BARRA DE ATERRIZAJE SUPERIOR1",
        "79"=>"TORRE BARRA DE ATERRIZAJE INFERIOR1", 
        "80"=>"TORRE BARRA DE ATERRIZAJE SUPERIOR2", 
        "81"=>"TORRE BARRA DE ATERRIZAJE INFERIOR2",
        "82"=>"TORRE BARRA DE ATERRIZAJE SUPERIOR3",
        "83"=>"TORRE BARRA DE ATERRIZAJE SUPERIOR3",
        "84"=>"PLANTA DC FRONTAL",
        "85"=>"PLANTA DISPLAY CARGA AMP", 
        "86"=>"PLANTA RECTIFICADORES", 
        "87"=>"PLANTA BREAKERS",
        "88"=>"PLANTA BANCO DE BATERIAS",
        "89"=>"PLANTA DESCONECTADOR BANCO BATERIAS",
        "90"=>"PLANTA CABLE 500",
        "91"=>"PLANTA CABLE 500 ATERRIZAJE", 
        "92"=>"PLANTA PATH AISLANTE BANCO BATERIAS", 
        "93"=>"PLANTA PATH DC POWER PLANT",
        "94"=>"PLANTA OTRO",
        "95"=>"PLANTA OTRO",
        "96"=>"SITE PISO1",
        "97"=>"SITE PISO2", 
        "98"=>"SITE SUPRESOR DE PICOS", 
        "99"=>"SITE PUNCH BLOCK ALARMAS",
        "100"=>"SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN",
        "101"=>"SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G",
        "102"=>"SITE HVAC REJILLAS UNIDAD1",
        "103"=>"SITE HVAC REJILLAS UNIDAD2", 
        "104"=>"SITE RACK CONTROLLER FRONTAL", 
        "105"=>"SITE RACK CONTROLLER POSTERIOR",
        "106"=>"SITE RACK RF FRONTAL",
        "107"=>"SITE RACK RF POSTERIOR",
        "108"=>"SITE RACK CXP MSCR FRONTAL",
        "109"=>"SITE RACK CXP MSCR POSTERIOR", 
        "110"=>"SITE ESCALERILLA CABLERA RACK CXP MSCR1", 
        "111"=>"SITE ESCALERILLA CABLERA RACK EXP MSCR2",
        "112"=>"SITE HALO DE TIERRA INTERNO1",
        "113"=>"SITE HALO DE TIERRA INTERNO2",
        "114"=>"SITE SENSOR DE HUMO",
        "115"=>"SITE SENSOR DE PUERTA",
        "116"=>"SITE SENSOR DE TEMPERATURA ALTA Y BAJA",
        "117"=>"SITE LEG LAG", 
        "118"=>"SITE OTRO1", 
        "119"=>"SITE OTRO2",
        "120"=>"SITE POP PISO1",
        "121"=>"SITE POP PISO2",
        "122"=>"SITE POP SUPRESOR DE PICOS",
        "123"=>"SITE POP PUNCH BLOCK ALARMAS",
        "124"=>"SITE POP PASAMUROS",
        "125"=>"SITE POP PASAMUROS 3G",
        "126"=>"SITE POP HVAC REJILLAS UNIDAD1",
        "127"=>"SITE POP HVAC REJILLAS UNIDAD2",
        "128"=>"SITE POP RACK CONTROLLER FRONTAL",
        "129"=>"SITE POP RACK CONTROLLER POSTERIOR",
        "130"=>"SITE POP RACK RF FRONTAL",
        "131"=>"SITE POP RACK RF POSTERIOR",
        "132"=>"SITE POP RACK EXP MSER FRONTAL",
        "133"=>"SITE POP RACK EXP MSER POSTERIOR",
        "134"=>"SITE POP ESCALERILLA CABLERA1",
        "135"=>"SITE POP ESCALERILLA CABLERA2",
        "136"=>"SITE POP HALO DE TIERRA1",
        "137"=>"SITE POP HALO DE TIERRA2",
        "138"=>"SITE POP SENSOR DE HUMO",
        "139"=>"SITE POP SENSOR DE PUERTA",
        "140"=>"SITE POP SENSOR DE TEMPERATURA",
        "141"=>"SITE POP LED LAG",
        "142"=>"SITE POP OTRO1",
        "143"=>"SITE POP OTRO2",
        "144"=>"SITE TELCO PISO1",
        "145"=>"SITE TELCO PISO2",
        "146"=>"SITE TELCO SUPRESOR DE PICOS",
        "147"=>"SITE TELCO PUNCH BLOCK ALARMAS",
        "148"=>"SITE TELCO PASAMUROS",
        "149"=>"SITE TELCO PASAMUROS 3G",
        "150"=>"SITE TELCO HVAC REJILLAS UNIDAD1",
        "151"=>"SITE TELCO HVAC REJILLAS UNIDAD2",
        "152"=>"SITE TELCO RACK CONTROLLER FRONTAL",
        "153"=>"SITE TELCO RACK CONTROLLER POSTERIOR",
        "154"=>"SITE TELCO RACK RF FRONTAL",
        "155"=>"SITE TELCO RACK RF POSTERIOR",
        "156"=>"SITE TELCO RACK EXP MSER FRONTAL",
        "157"=>"SITE TELCO RACK EXP MSER POSTERIOR",
        "158"=>"SITE TELCO ESCALERILLA CABLERA1",
        "159"=>"SITE TELCO ESCALERILLA CABLERA2",
        "160"=>"SITE TELCO HALO DE TIERRA1",
        "161"=>"SITE TELCO HALO DE TIERRA2",
        "162"=>"SITE TELCO SENSOR DE HUMO",
        "163"=>"SITE TELCO SENSOR DE PUERTA",
        "164"=>"SITE TELCO SENSOR DE TEMPERATURA",
        "165"=>"SITE TELCO LED LAG",
        "166"=>"SITE TELCO OTRO1",
        "167"=>"SITE TELCO OTRO2",
        "168"=>"MW RACK FRONTAL",
        "169"=>"MW RACK POSTERIOR",
        "170"=>"MW ATERRIZAJE DE RACK",
        "171"=>"MW PATH AISLANTE",
        "172"=>"MW DSX FRONTAL",
        "173"=>"MW DSX POSTERIOR",
        "174"=>"MW DACS VISTA FRONTAL",
        "175"=>"MW DACS VISTA POSTERIOR",
        "176"=>"MW DACS PATH AISLANTE",
        "177"=>"MW DACS ATERRIZAJE DE EQUIPO",
        "178"=>"MW DACS OTRO1",
        "179"=>"MW DACS OTRO2",
        "180"=>"MW TELLABS VISTA FRONTAL",
        "181"=>"MW TELLABS VISTA POSTERIOR",
        "182"=>"MW TELLABS PATH AISLANTE",
        "183"=>"MW TELLABS ATERRIZAJE DE EQUIPO",
        "184"=>"MW TELLABS OTRO1",
        "185"=>"MW TELLABS OTRO2",
        "186"=>"EVO NODOB RTN FRONTAL",
        "187"=>"EVO NODOB RTN POSTERIOR",
        "188"=>"EVO RTN",
        "189"=>"EVO BBU",
        "190"=>"EVO CX600 FRONTAL",
        "191"=>"EVO CX600 POSTERIOR",
        "192"=>"EVO APM30 FRONTAL",
        "193"=>"EVO APM30 POSTERIOR",
        "194"=>"PENDIENTE1",
        "195"=>"PENDIENTE2",
        "196"=>"PENDIENTE3",
        "197"=>"PENDIENTE4",
        "198"=>"PENDIENTE5",
        "199"=>"PENDIENTE6",
        "200"=>"PENDIENTE7",
        "201"=>"PENDIENTE8",
        "202"=>"PENDIENTE9"*/
        //el ultimo dejarlo sin coma
);
//=====================================MUESTRA SOLAMENTE LAS IMAGENES DEL DIRECTORIO======================

$dir = "./fotos/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($buf = opendir($dir)){
    // List files in images directory
    while (($file = readdir($buf)) !== false){
      echo "filename:" . $file . "<br>";
    }
  
  }
}
  
closedir($buf);
//=====================================MUESTRA EL ARREGLO QUE CONTIENE LOS NOMBRES REALES=================
foreach($imagen as  $clave => $nombre)
{
	if(is_int($nombre))
	{
		//rename("images","pictures");
	echo	$clave . ": $" . $nombre . 	"<br />";
	}
	else{
	echo	$clave .  ": " . $nombre . "<br />";
	
	}
}
//================================EMPEZAMOS A RENOMBRAR================================================
$directory="./fotos";
$i=0;
$dirint = dir($directory);

 while (($archivo = $dirint->read()) !== false)
    {
        if (eregi("jpg", $archivo) || !is_dir($archivo) && !strcmp($archivo, ".") && !strcmp($archivo, ".."))
        {

            $caja =array();
            echo $nombre . "-->" . $archivo ;
            echo "<br>";
            rename( "./fotos/".$archivo,"./fotos/temporal/".$imagen[$i].'.JPG' ) or die('Error renaming file.');
            copy("./fotos/temporal/".$imagen[$i].'.JPG', "./fotos/".$archivo)
            //echo "./fotos/temporal/".$imagen[$i].'.JPG';
            array_push($caja,$archivo);
            //print_r($caja);
              
            print_r($caja);
            $i++;
    }
    
}
rewinddir(); 

unset($i);

$dirint->close();


?>