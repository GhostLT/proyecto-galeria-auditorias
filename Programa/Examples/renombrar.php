<?php
//#!/usr/bin/php
//$gestor = opendir('/path/to/files')
//$dir= opendir( getcwd() );
$dir= opendir('./fotos/');
echo $dir . "termina el directorio";
echo "<br>";
$c=0;
 
$names= array(
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
        //============================================================================================
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
        "36"=>"CASETA TELCO FRONTAL", 
        "37"=>"CASETA TELCO POSTERIOR", 
        "38"=>"CASETA TELCO LATERAL DER",
        "39"=>"CASETA TELCO LATERAL IZQ",
        "40"=>"CASETA TELCO EQUIPOS HVAC CASETA TELCO",
        "41"=>"CASETA TELCO PASAMUROS Y BARRA CASETA TELCO",
        "42"=>"CASETA POP FRONTAL", 
        "43"=>"CASETA POP POSTERIOR", 
        "44"=>"CASETA POP LATERAL DER",
        "45"=>"CASETA POP LATERAL IZQ",
        "46"=>"CASETA POP EQUIPOS HVAC",
        "47"=>"CASETA POP PASAMUROS Y BARRA",
        "48"=>"CASETA HUB FRONTAL",
        "49"=>"CASETA HUB POSTERIOR",
        "50"=>"CASETA HUB LATERAL DER", 
        "51"=>"CASETA HUB LATERAL IZQ", 
        "52"=>"CASETA HUB EQUIPOS HVAC",
        "53"=>"CASETA HUB PASAMUROS Y BARRA",
        //============================================================================================
        "54"=>"GENERADOR FRONTAL",
        "55"=>"GENERADOR POSTERIOR", 
        "56"=>"GENERADOR LATERAL DER", 
        "57"=>"GENERADOR LATERAL IZQ",
        "58"=>"GENERADOR ETIQUETA(MODELO,SN)",
        "59"=>"GENERADOR MEDIDOR COMBUSTIBLE"
        "60"=>"GENERADOR TANQUE EXTERNO",
        "61"=>"GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE", 
        "62"=>"GENERADOR MODULO TRANSFERENCIA", 
        "63"=>"GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN)",
        "64"=>"GENERADOR PROTECCION",
        "65"=>"HOROMETRO",
        "66"=>"TORRE CARA A",
        "67"=>"ATERRIZAJE DE PIERNAS CARA A", 
        "68"=>"TORRE CARA B", 
        "69"=>"ATERRIZAJE DE PIERNAS CARA B",
        "70"=>"TORRE CARA C",
        "71"=>"ATERRIZAJE DE PIERNAS CARA C",
        "72"=>"TORRE BARRA DE ATERRIZAJE SUPERIOR1",
        "73"=>"TORRE BARRA DE ATERRIZAJE INFERIOR1", 
        "74"=>"TORRE BARRA DE ATERRIZAJE SUPERIOR2", 
        "75"=>"TORRE BARRA DE ATERRIZAJE INFERIOR2",
        "76"=>"TORRE BARRA DE ATERRIZAJE SUPERIOR3",
        "77"=>"TORRE BARRA DE ATERRIZAJE SUPERIOR3",
        "78"=>"PLANTA DC FRONTAL",
        "79"=>"PLANTA DISPLAY CARGA AMP", 
        "80"=>"PLANTA RECTIFICADORES", 
        "81"=>"PLANTA BREAKERS",
        "82"=>"PLANTA BANCO DE BATERIAS",
        "83"=>"PLANTA DESCONECTADOR BANCO BATERIAS",
        "84"=>"PLANTA CABLE 500",
        "85"=>"PLANTA CABLE 500 ATERRIZAJE", 
        "86"=>"PLANTA PATH AISLANTE BANCO BATERIAS", 
        "87"=>"PLANTA PATH DC POWER PLANT",
        "88"=>"PLANTA OTRO",
        "89"=>"PLANTA OTRO",
        "90"=>"SITE PISO1",
        "91"=>"SITE PISO2", 
        "92"=>"SITE SUPRESOR DE PICOS", 
        "93"=>"SITE PUNCH BLOCK ALARMAS",
        "94"=>"SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN",
        "95"=>"SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G",
        "96"=>"SITE HVAC REJILLAS UNIDAD1",
        "97"=>"SITE HVAC REJILLAS UNIDAD2", 
        "98"=>"SITE RACK CONTROLLER FRONTAL", 
        "99"=>"SITE RACK CONTROLLER POSTERIOR",
        "100"=>"SITE RACK RF FRONTAL",
        "101"=>"SITE RACK RF POSTERIOR",
        "102"=>"SITE RACK CXP MSCR FRONTAL",
        "103"=>"SITE RACK CXP MSCR POSTERIOR", 
        "104"=>"SITE ESCALERILLA CABLERA RACK CXP MSCR1", 
        "105"=>"SITE ESCALERILLA CABLERA RACK EXP MSCR2",
        "106"=>"SITE HALO DE TIERRA INTERNO1",
        "107"=>"SITE HALO DE TIERRA INTERNO2",
        "108"=>"SITE SENSOR DE HUMO",
        "109"=>"SITE SENSOR DE PUERTA",
        "110"=>"SITE SENSOR DE TEMPERATURA ALTA Y BAJA",
        "111"=>"SITE LEG LAG", 
        "112"=>"SITE OTRO1", 
        "113"=>"SITE OTRO2",
        "114"=>"SITE POP PISO1",
        "115"=>"SITE POP PISO2",
        "116"=>"SITE POP SUPRESOR DE PICOS",
        "117"=>"SITE POP PUNCH BLOCK ALARMAS",
        "118"=>"SITE POP PASAMUROS",
        "119"=>"SITE POP PASAMUROS 3G",
        "120"=>"SITE POP HVAC REJILLAS UNIDAD1",
        "121"=>"SITE POP HVAC REJILLAS UNIDAD2",
        "122"=>"SITE POP RACK CONTROLLER FRONTAL",
        "123"=>"SITE POP RACK CONTROLLER POSTERIOR",
        "124"=>"SITE POP RACK RF FRONTAL",
        "125"=>"SITE POP RACK RF POSTERIOR",
        "126"=>"SITE POP RACK EXP MSER FRONTAL",
        "127"=>"SITE POP RACK EXP MSER POSTERIOR",
        "128"=>"SITE POP ESCALERILLA CABLERA1",
        "129"=>"SITE POP ESCALERILLA CABLERA2",
        "130"=>"SITE POP HALO DE TIERRA1",
        "131"=>"SITE POP HALO DE TIERRA2",
        "132"=>"SITE POP SENSOR DE HUMO",
        "133"=>"SITE POP SENSOR DE PUERTA",
        "134"=>"SITE POP SENSOR DE TEMPERATURA",
        "135"=>"SITE POP LED LAG",
        "136"=>"SITE POP OTRO1",
        "137"=>"SITE POP OTRO2",
        "138"=>"SITE TELCO PISO1",
        "139"=>"SITE TELCO PISO2",
        "140"=>"SITE TELCO SUPRESOR DE PICOS",
        "141"=>"SITE TELCO PUNCH BLOCK ALARMAS",
        "142"=>"SITE TELCO PASAMUROS",
        "143"=>"SITE TELCO PASAMUROS 3G",
        "144"=>"SITE TELCO HVAC REJILLAS UNIDAD1",
        "145"=>"SITE TELCO HVAC REJILLAS UNIDAD2",
        "146"=>"SITE TELCO RACK CONTROLLER FRONTAL",
        "147"=>"SITE TELCO RACK CONTROLLER POSTERIOR",
        "148"=>"SITE TELCO RACK RF FRONTAL",
        "149"=>"SITE TELCO RACK RF POSTERIOR",
        "150"=>"SITE TELCO RACK EXP MSER FRONTAL",
        "151"=>"SITE TELCO RACK EXP MSER POSTERIOR",
        "152"=>"SITE TELCO ESCALERILLA CABLERA1",
        "153"=>"SITE TELCO ESCALERILLA CABLERA2",
        "154"=>"SITE TELCO HALO DE TIERRA1",
        "155"=>"SITE TELCO HALO DE TIERRA2",
        "156"=>"SITE TELCO SENSOR DE HUMO",
        "157"=>"SITE TELCO SENSOR DE PUERTA",
        "158"=>"SITE TELCO SENSOR DE TEMPERATURA",
        "159"=>"SITE TELCO LED LAG",
        "160"=>"SITE TELCO OTRO1",
        "161"=>"SITE TELCO OTRO2",
        "162"=>"MW RACK FRONTAL",
        "163"=>"MW RACK POSTERIOR",
        "164"=>"MW ATERRIZAJE DE RACK",
        "165"=>"MW PATH AISLANTE",
        "166"=>"MW DSX FRONTAL",
        "167"=>"MW DSX POSTERIOR",
        "168"=>"MW DACS VISTA FRONTAL",
        "169"=>"MW DACS VISTA POSTERIOR",
        "170"=>"MW DACS PATH AISLANTE",
        "171"=>"MW DACS ATERRIZAJE DE EQUIPO",
        "172"=>"MW DACS OTRO1",
        "173"=>"MW DACS OTRO2",
        "174"=>"MW TELLABS VISTA FRONTAL",
        "175"=>"MW TELLABS VISTA POSTERIOR",
        "176"=>"MW TELLABS PATH AISLANTE",
        "177"=>"MW TELLABS ATERRIZAJE DE EQUIPO",
        "178"=>"MW TELLABS OTRO1",
        "179"=>"MW TELLABS OTRO2",
        "180"=>"EVO NODOB RTN FRONTAL",
        "181"=>"EVO NODOB RTN POSTERIOR",
        "182"=>"EVO RTN",
        "183"=>"EVO BBU",
        "184"=>"EVO CX600 FRONTAL",
        "185"=>"EVO CX600 POSTERIOR",
        "186"=>"EVO APM30 FRONTAL",
        "187"=>"EVO APM30 POSTERIOR",
        "189"=>"PENDIENTE 1",
	"190"=>"PENDIENTE 2",
	"191"=>"PENDIENTE 3",
        "192"=>"PENDIENTE 4",
	"193"=>"PENDIENTE 5",
	"194"=>"PENDIENTE 6"
        //el ultimo dejarlo sin coma
        );
//echo "\nIniciando [". getcwd(). "]...\n\n";

echo $dir;
        //abre el directorio y checa si tiene contenido
while( ($buf=readdir($dir))!==FALSE )
        {
            //revisa que no sean archivos ocultos y que sean imagenes y que no cuente directorios
        if( strcmp($buf, ".") && strcmp($buf, "..") && strstr(strtoupper($buf), ".JPG") && !is_dir($buf) )
                {
                $c++;
                echo "<br>";
                //convertir el nombre a mayusculas
                rename( $buf, strtoupper($buf) or die('Error renaming file.'));
                echo "<br>";
                echo "segun aqui esta renombrando";
                }
        }
       //si la cantidad es diferene a nombres manda un error
       if( $c!=count($names) )
                echo 'Error: existe '. $c. ' fotos y solo definidos '. count($names). ' nombre';
else
        {
        //retorna al inicio el puntero
       rewind($dir);
        $i=0;
        //abre el directorio y checa si tiene contenido
        while( ($buf=readdir($dir))!==FALSE )
                {
                echo "\nArchivo: ". $buf;
                //revisa que no sean archivos ocultos y que sean imagenes y que no cuente directorios
                if( strcmp($buf, ".") && strcmp($buf, "..") && strstr($buf, ".JPG") && !is_dir($buf) )
                        {
                            //renombrarndo la foto a el nombre que le toque
                        echo "\nRenombrando: ". $buf. " --> ". $names[$i]. ".JPG";
                        rename( "./fotos/".$buf, "./fotos/temporal/".$names[$i].'.JPG' ) or die('Error renaming file.');
                        $nuevo_archivo = "./fotos/temporal/".$names[$i].'.JPG';                        
                        //echo $names . "si jala aqui entra la condicion";
                        $i++;
                        echo "<br>";
                        //echo "segun aqui esta renombrando en la segunda parte";
                        echo "\n\n\n";
                        }
                }
        
        }
       
        unset($i);

 //CIERRA EL DIRECTORIO ACTUAL USADO
closedir($dir);
//DESTRUYE LO CARGADO EN MEMORIA
unset($dir, $buf, $c, $names);
echo "\n\nFin del programa...\n\n";
//exit(0);
 
?>