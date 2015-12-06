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
        //=====================================DATASHEET5SHELTER====================================
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
        "42"=>"CASETA TELCO FRONTAL", 
        "43"=>"CASETA TELCO POSTERIOR", 
        "44"=>"CASETA TELCO LATERAL DER",
        "45"=>"CASETA TELCO LATERAL IZQ",
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
        "58"=>"CASETA HUB EQUIPOS HVAC",
        "59"=>"CASETA HUB PASAMUROS Y BARRA",
        //=====================================DATASHEETGENERADOR====================================
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
        "71"=>"HOROMETRO",		//72 fotos hasta aqui
        //=====================================DATASHEETTORRE====================================
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
        "83"=>"TORRE BARRA DE ATERRIZAJE INFERIOR3",
        //=====================================DATASHEETPLANTA====================================
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
        "95"=>"PLANTA OTRO2",
        //=====================================DATASHEETSITE====================================
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
        "108"=>"SITE RACK EXP MSCR FRONTAL",
        "109"=>"SITE RACK EXP MSCR POSTERIOR", 
        "110"=>"SITE ESCALERILLA CABLERA RACK EXP MSCR1", 
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
        //=====================================DATASHEETMICROONDAS====================================
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
        //=====================================DATASHEETEVOLUTION====================================
        "186"=>"EVO NODOB RTN FRONTAL",
        "187"=>"EVO NODOB RTN POSTERIOR",
        "188"=>"EVO RTN",
        "189"=>"EVO BBU",
        "190"=>"EVO CX600 FRONTAL",
        "191"=>"EVO CX600 POSTERIOR",
        "192"=>"EVO APM30 FRONTAL",
        "193"=>"EVO APM30 POSTERIOR" /*  //DEBEN SER 194 FOTOS
        "194"=>"PENDIENTE1",
        "195"=>"PENDIENTE2",
        "196"=>"PENDIENTE3",
        "197"=>"PENDIENTE4",
        "198"=>"PENDIENTE5",
        "199"=>"PENDIENTE6",
        "200"=>"PENDIENTE7",
        "201"=>"PENDIENTE8",
        "202"=>"PENDIENTE9"   */
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
                //echo "<br>";
                //convertir el nombre a mayusculas
                rename( $buf, strtoupper($buf));// or die('Error renaming file.')
                //echo "<br>";
                //echo "segun aqui esta renombrando";
                }
        }
       //si la cantidad es diferene a nombres manda un error
       if( $c!=count($names) )
                echo 'Error: existe '. $c. ' fotos y para renombrar se necesitan definidas '. count($names). ' nombre';
else
        {
        //retorna al inicio el puntero
       rewind($dir);
        $i=0;
        //abre el directorio y checa si tiene contenido
        while( ($buf=readdir($dir))!==FALSE )
                {
                //echo "\nArchivo: ". $buf;
                //revisa que no sean archivos ocultos y que sean imagenes y que no cuente directorios
                if( strcmp($buf, ".") && strcmp($buf, "..") && strstr($buf, ".JPG") && !is_dir($buf) )
                        {
                            //renombrarndo la foto a el nombre que le toque
                        echo "\nRenombrando: ". $buf. " --> ". $names[$i]. ".JPG";
                        rename( "./fotos/".$buf, "./fotos/temporal/".$names[$i].'.JPG' ) or die('Error renaming file.');
                        //echo $names . "si jala aqui entra la condicion";
                        $i++;
                        echo "<br>";
                        //echo "segun aqui esta renombrando en la segunda parte";
                        //echo "\n\n\n";
                        }
                }
        
        }
       
        unset($i);

 //CIERRA EL DIRECTORIO ACTUAL USADO
closedir($dir);
//DESTRUYE LO CARGADO EN MEMORIA
unset($dir, $buf, $c, $names);

//================================================PREDIO VISTA FRONTAL.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO VISTA FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO VISTA FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO VISTA FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO VISTA FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO VISTA FRONTAL.JPG", 80);

//================================================PREDIO VISTA POSTERIOR.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO VISTA POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO VISTA POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO VISTA POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO VISTA POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO VISTA POSTERIOR.JPG", 80);

//================================================PREDIO LATERAL IZQ.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO LATERAL IZQ.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO LATERAL IZQ.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO LATERAL IZQ.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO LATERAL IZQ.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO LATERAL IZQ.JPG", 80);

//================================================PREDIO LATERAL DER.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO LATERAL DER.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO LATERAL DER.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO LATERAL DER.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO LATERAL DER.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO LATERAL DER.JPG", 80);

//================================================PREDIO PASADOR PRINCIPAL.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO PASADOR PRINCIPAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO PASADOR PRINCIPAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO PASADOR PRINCIPAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO PASADOR PRINCIPAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO PASADOR PRINCIPAL.JPG", 80);
  
//================================================PREDIO PASADOR ADICIONAL.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO PASADOR ADICIONAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO PASADOR ADICIONAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO PASADOR ADICIONAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO PASADOR ADICIONAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO PASADOR ADICIONAL.JPG", 80);
  
//================================================PREDIO CONCERTINA 1.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO CONCERTINA 1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO CONCERTINA 1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO CONCERTINA 1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO CONCERTINA 1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO CONCERTINA 1.JPG", 80);
  
//================================================PREDIO CONCERTINA 2.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO CONCERTINA 2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO CONCERTINA 2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO CONCERTINA 2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO CONCERTINA 2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO CONCERTINA 2.JPG", 80);
  
//================================================PREDIO PORTON DE ACCESO.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO PORTON DE ACCESO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO PORTON DE ACCESO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO PORTON DE ACCESO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO PORTON DE ACCESO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO PORTON DE ACCESO.JPG", 80);
  

//================================================PREDIO PORTON DE ACCESO SECUNDARIA.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO PORTON DE ACCESO SECUNDARIA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO PORTON DE ACCESO SECUNDARIA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO PORTON DE ACCESO SECUNDARIA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO PORTON DE ACCESO SECUNDARIA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO PORTON DE ACCESO SECUNDARIA.JPG", 80);
  
//================================================PREDIO OTROS.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO OTROS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO OTROS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO OTROS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO OTROS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO OTROS.JPG", 80);
  
//================================================PREDIO OTROS2.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PREDIO OTROS2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PREDIO OTROS2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PREDIO OTROS2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PREDIO OTROS2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PREDIO OTROS2.JPG", 80);
  



//FALTA AQUI AGREGAR LOS 12 CONVERSIONES DE FOTOS PARA EL SHEET4
//====================================================================================================
//================================================SUB NICHO MEDIDOR FRONTAL.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB NICHO MEDIDOR FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB NICHO MEDIDOR FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB NICHO MEDIDOR FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB NICHO MEDIDOR FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB NICHO MEDIDOR FRONTAL.JPG", 80);

//================================================SUB NICHO TERMOMAGNETICO POSTERIOR.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB NICHO TERMOMAGNETICO POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB NICHO TERMOMAGNETICO POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB NICHO TERMOMAGNETICO POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB NICHO TERMOMAGNETICO POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB NICHO TERMOMAGNETICO POSTERIOR.JPG", 80);

//================================================SUB MEDIDOR DE LUZ.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB MEDIDOR DE LUZ.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB MEDIDOR DE LUZ.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB MEDIDOR DE LUZ.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB MEDIDOR DE LUZ.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB MEDIDOR DE LUZ.JPG", 80);

//================================================SUB TERMOMAGNETICO Y CUCHILLAS.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB TERMOMAGNETICO Y CUCHILLAS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB TERMOMAGNETICO Y CUCHILLAS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB TERMOMAGNETICO Y CUCHILLAS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB TERMOMAGNETICO Y CUCHILLAS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB TERMOMAGNETICO Y CUCHILLAS.JPG", 80);

//================================================SUB SUBESTACION ELECTRICA.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB SUBESTACION ELECTRICA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB SUBESTACION ELECTRICA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB SUBESTACION ELECTRICA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB SUBESTACION ELECTRICA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB SUBESTACION ELECTRICA.JPG", 80);
  
//================================================SUB ACOMETIDA ELECTRICA.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB ACOMETIDA ELECTRICA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB ACOMETIDA ELECTRICA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB ACOMETIDA ELECTRICA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB ACOMETIDA ELECTRICA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB ACOMETIDA ELECTRICA.JPG", 80);
  
//================================================SUB POSTE O BASE DE TRANSFORMADOR.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB POSTE O BASE DE TRANSFORMADOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB POSTE O BASE DE TRANSFORMADOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB POSTE O BASE DE TRANSFORMADOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB POSTE O BASE DE TRANSFORMADOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB POSTE O BASE DE TRANSFORMADOR.JPG", 80);
  
//================================================SUB ATERRIZAJE.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB ATERRIZAJE.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB ATERRIZAJE.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB ATERRIZAJE.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB ATERRIZAJE.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB ATERRIZAJE.JPG", 80);
  
//================================================SUB OTROS1.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB OTROS1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB OTROS1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB OTROS1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB OTROS1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB OTROS1.JPG", 80);
  

//================================================SUB OTROS2.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB OTROS2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB OTROS2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB OTROS2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB OTROS2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB OTROS2.JPG", 80);
  
//================================================SUB OTROS3.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB OTROS3.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB OTROS3.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB OTROS3.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB OTROS3.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB OTROS3.JPG", 80);
  
//================================================SUB OTROS4.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SUB OTROS4.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SUB OTROS4.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SUB OTROS4.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SUB OTROS4.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SUB OTROS4.JPG", 80);



 
//======================================================================================================
//=================================================DATASHEET05SHELTER===================================
//================================================SHELTER CASETA IDEN FRONTAL.JPG===========================
//FALTA AQUI AGREGAR LOS 30 CONVERSIONES DE FOTOS PARA EL SHEET5
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER CASETA IDEN FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER CASETA IDEN FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER CASETA IDEN FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER CASETA IDEN FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER CASETA IDEN FRONTAL.JPG", 80);

//================================================SHELTER CASETA IDEN POSTERIOR.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER CASETA IDEN POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER CASETA IDEN POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER CASETA IDEN POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER CASETA IDEN POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER CASETA IDEN POSTERIOR.JPG", 80);

//================================================SHELTER CASETA IDEN LATERAL DER.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER CASETA IDEN LATERAL DER.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER CASETA IDEN LATERAL DER.JPG");
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER CASETA IDEN LATERAL DER.JPG");
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER CASETA IDEN LATERAL DER.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER CASETA IDEN LATERAL DER.JPG", 80);

//================================================SHELTER CASETA IDEN LATERAL IZQ.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER CASETA IDEN LATERAL IZQ.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER CASETA IDEN LATERAL IZQ.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER CASETA IDEN LATERAL IZQ.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER CASETA IDEN LATERAL IZQ.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER CASETA IDEN LATERAL IZQ.JPG", 80);

//================================================SHELTER EQUIPOS HVAC CASETA IDEN.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER EQUIPOS HVAC CASETA IDEN.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER EQUIPOS HVAC CASETA IDEN.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER EQUIPOS HVAC CASETA IDEN.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER EQUIPOS HVAC CASETA IDEN.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER EQUIPOS HVAC CASETA IDEN.JPG", 80);
  
//================================================SHELTER PASAMUROS Y BARRA CASETA IDEN Y 3G.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER PASAMUROS Y BARRA CASETA IDEN Y 3G.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER PASAMUROS Y BARRA CASETA IDEN Y 3G.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER PASAMUROS Y BARRA CASETA IDEN Y 3G.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER PASAMUROS Y BARRA CASETA IDEN Y 3G.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER PASAMUROS Y BARRA CASETA IDEN Y 3G.JPG", 80);
  
//================================================SHELTER PUERTA.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER PUERTA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER PUERTA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER PUERTA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER PUERTA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER PUERTA.JPG", 80);
  
//================================================SHELTER BOTA AGUAS.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER BOTA AGUAS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER BOTA AGUAS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER BOTA AGUAS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER BOTA AGUAS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER BOTA AGUAS.JPG", 80);
  
//================================================SHELTER LAMPARA EXTERIOR.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER LAMPARA EXTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER LAMPARA EXTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER LAMPARA EXTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER LAMPARA EXTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER LAMPARA EXTERIOR.JPG", 80);
  

//================================================SHELTER LAMPARA SUBURBANA.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER LAMPARA SUBURBANA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER LAMPARA SUBURBANA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER LAMPARA SUBURBANA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER LAMPARA SUBURBANA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER LAMPARA SUBURBANA.JPG", 80);
  
//================================================SHELTER PASAMUROS1.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER PASAMUROS1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER PASAMUROS1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER PASAMUROS1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER PASAMUROS1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER PASAMUROS1.JPG", 80);
  
//================================================SHELTER PASAMUROS2.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SHELTER PASAMUROS2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SHELTER PASAMUROS2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SHELTER PASAMUROS2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SHELTER PASAMUROS2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SHELTER PASAMUROS2.JPG", 80);
  

//====================================================================================================
//================================================CASETA TELCO FRONTAL.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA TELCO FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA TELCO FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA TELCO FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA TELCO FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA TELCO FRONTAL.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//================================================CASETA TELCO POSTERIOR.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA TELCO POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA TELCO POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA TELCO POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA TELCO POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA TELCO POSTERIOR.JPG", 80);
  

//====================================================================================================
//================================================CASETA TELCO LATERAL DER.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA TELCO LATERAL DER.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA TELCO LATERAL DER.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA TELCO LATERAL DER.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA TELCO LATERAL DER.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA TELCO LATERAL DER.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//================================================CASETA TELCO LATERAL IZQ.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA TELCO LATERAL IZQ.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA TELCO LATERAL IZQ.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA TELCO LATERAL IZQ.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA TELCO LATERAL IZQ.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA TELCO LATERAL IZQ.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================================CASETA TELCO EQUIPOS HVAC.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA TELCO EQUIPOS HVAC.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA TELCO EQUIPOS HVAC.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA TELCO EQUIPOS HVAC.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA TELCO EQUIPOS HVAC.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA TELCO EQUIPOS HVAC.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//==================================CASETA TELCO PASAMUROS Y BARRA CASETA TELCO.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA TELCO PASAMUROS Y BARRA CASETA TELCO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA TELCO PASAMUROS Y BARRA CASETA TELCO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA TELCO PASAMUROS Y BARRA CASETA TELCO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA TELCO PASAMUROS Y BARRA CASETA TELCO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA TELCO PASAMUROS Y BARRA CASETA TELCO.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA POP FRONTAL.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA POP FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA POP FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA POP FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA POP FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA POP FRONTAL.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA POP POSTERIOR.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA POP POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA POP POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA POP POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA POP POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA POP POSTERIOR.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA POP LATERAL DER.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA POP LATERAL DER.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA POP LATERAL DER.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA POP LATERAL DER.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA POP LATERAL DER.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA POP LATERAL DER.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA POP LATERAL IZQ.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA POP LATERAL IZQ.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA POP LATERAL IZQ.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA POP LATERAL IZQ.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA POP LATERAL IZQ.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA POP LATERAL IZQ.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA POP EQUIPOS HVAC.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA POP EQUIPOS HVAC.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA POP EQUIPOS HVAC.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA POP EQUIPOS HVAC.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA POP EQUIPOS HVAC.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA POP EQUIPOS HVAC.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//==========================================CASETA POP PASAMUROS Y BARRA.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA POP PASAMUROS Y BARRA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA POP PASAMUROS Y BARRA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA POP PASAMUROS Y BARRA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA POP PASAMUROS Y BARRA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA POP PASAMUROS Y BARRA.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA HUB FRONTAL.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA HUB FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA HUB FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA HUB FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA HUB FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA HUB FRONTAL.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA HUB POSTERIOR.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA HUB POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA HUB POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA HUB POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA HUB POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA HUB POSTERIOR.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA HUB LATERAL DER.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA HUB LATERAL DER.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA HUB LATERAL DER.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA HUB LATERAL DER.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA HUB LATERAL DER.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA HUB LATERAL DER.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA HUB LATERAL IZQ.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA HUB LATERAL IZQ.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA HUB LATERAL IZQ.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA HUB LATERAL IZQ.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA HUB LATERAL IZQ.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA HUB LATERAL IZQ.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA HUB EQUIPOS HVAC.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA HUB EQUIPOS HVAC.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA HUB EQUIPOS HVAC.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA HUB EQUIPOS HVAC.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA HUB EQUIPOS HVAC.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA HUB EQUIPOS HVAC.JPG", 80);
  

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================CASETA HUB PASAMUROS Y BARRA.JPG===========================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/CASETA HUB PASAMUROS Y BARRA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/CASETA HUB PASAMUROS Y BARRA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/CASETA HUB PASAMUROS Y BARRA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/CASETA HUB PASAMUROS Y BARRA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/CASETA HUB PASAMUROS Y BARRA.JPG", 80);
 


//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================GENERADOR FRONTAL.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR FRONTAL.JPG", 80);
 

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================GENERADOR POSTERIOR.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================GENERADOR LATERAL DER.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR LATERAL DER.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR LATERAL DER.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR LATERAL DER.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR LATERAL DER.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR LATERAL DER.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================GENERADOR LATERAL IZQ.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR LATERAL IZQ.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR LATERAL IZQ.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR LATERAL IZQ.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR LATERAL IZQ.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR LATERAL IZQ.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================================GENERADOR ETIQUETA(MODELO,SN).JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR ETIQUETA(MODELO,SN).JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR ETIQUETA(MODELO,SN).JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR ETIQUETA(MODELO,SN).JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR ETIQUETA(MODELO,SN).JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR ETIQUETA(MODELO,SN).JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================================GENERADOR MEDIDOR COMBUSTIBLE.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR MEDIDOR COMBUSTIBLE.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR MEDIDOR COMBUSTIBLE.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR MEDIDOR COMBUSTIBLE.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR MEDIDOR COMBUSTIBLE.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR MEDIDOR COMBUSTIBLE.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================================GENERADOR TANQUE EXTERNO.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR TANQUE EXTERNO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR TANQUE EXTERNO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR TANQUE EXTERNO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR TANQUE EXTERNO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR TANQUE EXTERNO.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//===================================GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR TANQUE EXTERNO MEDIDOR COMBUSTIBLE.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//===================================GENERADOR MODULO TRANSFERENCIA.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR MODULO TRANSFERENCIA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR MODULO TRANSFERENCIA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR MODULO TRANSFERENCIA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR MODULO TRANSFERENCIA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR MODULO TRANSFERENCIA.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN).JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN).JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN).JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN).JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN).JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR TRANSFERENCIA ETIQUETA(MODELO,SN).JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================GENERADOR PROTECCION.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/GENERADOR PROTECCION.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/GENERADOR PROTECCION.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/GENERADOR PROTECCION.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/GENERADOR PROTECCION.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/GENERADOR PROTECCION.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================HOROMETRO.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/HOROMETRO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/HOROMETRO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/HOROMETRO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/HOROMETRO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/HOROMETRO.JPG", 80);
 



//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE CARA A.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE CARA A.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE CARA A.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE CARA A.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE CARA A.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE CARA A.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================ATERRIZAJE DE PIERNAS CARA A.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/ATERRIZAJE DE PIERNAS CARA A.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA A.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA A.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA A.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA A.JPG", 80);
 

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE CARA B.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE CARA B.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE CARA B.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE CARA B.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE CARA B.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE CARA B.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================ATERRIZAJE DE PIERNAS CARA B.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/ATERRIZAJE DE PIERNAS CARA B.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA B.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA B.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA B.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA B.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE CARA C.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE CARA C.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE CARA C.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE CARA C.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE CARA C.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE CARA C.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================ATERRIZAJE DE PIERNAS CARA C.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/ATERRIZAJE DE PIERNAS CARA C.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA C.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA C.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA C.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/ATERRIZAJE DE PIERNAS CARA C.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE BARRA DE ATERRIZAJE SUPERIOR1.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR1.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE BARRA DE ATERRIZAJE INFERIOR1.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR1.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE BARRA DE ATERRIZAJE SUPERIOR2.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR2.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE BARRA DE ATERRIZAJE INFERIOR2.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR2.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE BARRA DE ATERRIZAJE SUPERIOR3.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR3.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR3.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR3.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR3.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE BARRA DE ATERRIZAJE SUPERIOR3.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================TORRE BARRA DE ATERRIZAJE INFERIOR3.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR3.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR3.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR3.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR3.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/TORRE BARRA DE ATERRIZAJE INFERIOR3.JPG", 80);






//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA DC FRONTAL.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA DC FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA DC FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA DC FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA DC FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA DC FRONTAL.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA DISPLAY CARGA AMP.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA DISPLAY CARGA AMP.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA DISPLAY CARGA AMP.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA DISPLAY CARGA AMP.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA DISPLAY CARGA AMP.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA DISPLAY CARGA AMP.JPG", 80);
 

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA RECTIFICADORES.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA RECTIFICADORES.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA RECTIFICADORES.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA RECTIFICADORES.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA RECTIFICADORES.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA RECTIFICADORES.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA BREAKERS.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA BREAKERS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA BREAKERS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA BREAKERS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA BREAKERS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA BREAKERS.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA BANCO DE BATERIAS.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA BANCO DE BATERIAS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA BANCO DE BATERIAS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA BANCO DE BATERIAS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA BANCO DE BATERIAS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA BANCO DE BATERIAS.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA DESCONECTADOR BANCO BATERIAS.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA DESCONECTADOR BANCO BATERIAS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA DESCONECTADOR BANCO BATERIAS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA DESCONECTADOR BANCO BATERIAS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA DESCONECTADOR BANCO BATERIAS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA DESCONECTADOR BANCO BATERIAS.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA CABLE 500.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA CABLE 500.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA CABLE 500.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA CABLE 500.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA CABLE 500.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA CABLE 500.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA CABLE 500 ATERRIZAJE.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA CABLE 500 ATERRIZAJE.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA CABLE 500 ATERRIZAJE.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA CABLE 500 ATERRIZAJE.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA CABLE 500 ATERRIZAJE.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA CABLE 500 ATERRIZAJE.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA PATH AISLANTE BANCO BATERIAS.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA PATH AISLANTE BANCO BATERIAS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA PATH AISLANTE BANCO BATERIAS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA PATH AISLANTE BANCO BATERIAS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA PATH AISLANTE BANCO BATERIAS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA PATH AISLANTE BANCO BATERIAS.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA PATH DC POWER PLANT.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA PATH DC POWER PLANT.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA PATH DC POWER PLANT.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA PATH DC POWER PLANT.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA PATH DC POWER PLANT.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA PATH DC POWER PLANT.JPG", 80);
 
//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA OTRO.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA OTRO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA OTRO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA OTRO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA OTRO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA OTRO.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================PLANTA OTRO2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/PLANTA OTRO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/PLANTA OTRO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/PLANTA OTRO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/PLANTA OTRO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/PLANTA OTRO2.JPG", 80);




//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================SITE PISO1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE PISO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE PISO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE PISO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE PISO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE PISO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================SITE PISO2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE PISO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE PISO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE PISO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE PISO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE PISO2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================SITE SUPRESOR DE PICOS====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE SUPRESOR DE PICOS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE SUPRESOR DE PICOS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE SUPRESOR DE PICOS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE SUPRESOR DE PICOS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE SUPRESOR DE PICOS.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//================================SITE PUNCH BLOCK ALARMAS====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE PUNCH BLOCK ALARMAS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE PUNCH BLOCK ALARMAS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE PUNCH BLOCK ALARMAS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE PUNCH BLOCK ALARMAS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE PUNCH BLOCK ALARMAS.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//============================SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA IDEN.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE PASAMUROS Y PORTA ARRESTOR Y BARRA 3G.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE HVAC REJILLAS UNIDAD1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE HVAC REJILLAS UNIDAD1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE HVAC REJILLAS UNIDAD1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE HVAC REJILLAS UNIDAD1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE HVAC REJILLAS UNIDAD1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE HVAC REJILLAS UNIDAD1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE HVAC REJILLAS UNIDAD2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE HVAC REJILLAS UNIDAD2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE HVAC REJILLAS UNIDAD2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE HVAC REJILLAS UNIDAD2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE HVAC REJILLAS UNIDAD2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE HVAC REJILLAS UNIDAD2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE RACK CONTROLLER FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE RACK CONTROLLER FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE RACK CONTROLLER FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE RACK CONTROLLER FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE RACK CONTROLLER FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE RACK CONTROLLER FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE RACK CONTROLLER POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE RACK CONTROLLER POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE RACK CONTROLLER POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE RACK CONTROLLER POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE RACK CONTROLLER POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE RACK CONTROLLER POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE RACK RF FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE RACK RF FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE RACK RF FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE RACK RF FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE RACK RF FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE RACK RF FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE RACK RF POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE RACK RF POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE RACK RF POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE RACK RF POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE RACK RF POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE RACK RF POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE RACK EXP MSCR FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE RACK EXP MSCR FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE RACK EXP MSCR FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE RACK EXP MSCR FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE RACK EXP MSCR FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE RACK EXP MSCR FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE RACK EXP MSCR POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE RACK EXP MSCR POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE RACK EXP MSCR POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE RACK EXP MSCR POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE RACK EXP MSCR POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE RACK EXP MSCR POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE ESCALERILLA CABLERA RACK EXP MSCR1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE ESCALERILLA CABLERA RACK EXP MSCR2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE ESCALERILLA CABLERA RACK EXP MSCR2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE HALO DE TIERRA INTERNO1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE HALO DE TIERRA INTERNO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE HALO DE TIERRA INTERNO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE HALO DE TIERRA INTERNO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE HALO DE TIERRA INTERNO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE HALO DE TIERRA INTERNO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE HALO DE TIERRA INTERNO2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE HALO DE TIERRA INTERNO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE HALO DE TIERRA INTERNO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE HALO DE TIERRA INTERNO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE HALO DE TIERRA INTERNO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE HALO DE TIERRA INTERNO2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE SENSOR DE HUMO====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE SENSOR DE HUMO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE SENSOR DE HUMO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE SENSOR DE HUMO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE SENSOR DE HUMO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE SENSOR DE HUMO.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE SENSOR DE PUERTA====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE SENSOR DE PUERTA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE SENSOR DE PUERTA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE SENSOR DE PUERTA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE SENSOR DE PUERTA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE SENSOR DE PUERTA.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE SENSOR DE TEMPERATURA ALTA Y BAJA====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE SENSOR DE TEMPERATURA ALTA Y BAJA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE SENSOR DE TEMPERATURA ALTA Y BAJA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE SENSOR DE TEMPERATURA ALTA Y BAJA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE SENSOR DE TEMPERATURA ALTA Y BAJA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE SENSOR DE TEMPERATURA ALTA Y BAJA.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE LEG LAG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE LEG LAG.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE LEG LAG.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE LEG LAG.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE LEG LAG.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE LEG LAG.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE OTRO1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE OTRO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE OTRO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE OTRO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE OTRO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE OTRO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE OTRO2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE OTRO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE OTRO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE OTRO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE OTRO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE OTRO2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP PISO1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP PISO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP PISO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP PISO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP PISO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP PISO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP PISO2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP PISO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP PISO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP PISO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP PISO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP PISO2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP SUPRESOR DE PICOS====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP SUPRESOR DE PICOS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP SUPRESOR DE PICOS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP SUPRESOR DE PICOS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP SUPRESOR DE PICOS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP SUPRESOR DE PICOS.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP PUNCH BLOCK ALARMAS====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP PUNCH BLOCK ALARMAS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP PUNCH BLOCK ALARMAS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP PUNCH BLOCK ALARMAS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP PUNCH BLOCK ALARMAS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP PUNCH BLOCK ALARMAS.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP PASAMUROS====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP PASAMUROS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP PASAMUROS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP PASAMUROS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP PASAMUROS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP PASAMUROS.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP PASAMUROS 3G====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP PASAMUROS 3G.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP PASAMUROS 3G.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP PASAMUROS 3G.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP PASAMUROS 3G.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP PASAMUROS 3G.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP HVAC REJILLAS UNIDAD1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP HVAC REJILLAS UNIDAD2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP HVAC REJILLAS UNIDAD2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP RACK CONTROLLER FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP RACK CONTROLLER FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP RACK CONTROLLER FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP RACK CONTROLLER FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP RACK CONTROLLER FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP RACK CONTROLLER FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP RACK CONTROLLER POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP RACK CONTROLLER POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP RACK CONTROLLER POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP RACK CONTROLLER POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP RACK CONTROLLER POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP RACK CONTROLLER POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP RACK RF FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP RACK RF FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP RACK RF FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP RACK RF FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP RACK RF FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP RACK RF FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP RACK RF POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP RACK RF POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP RACK RF POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP RACK RF POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP RACK RF POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP RACK RF POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP RACK EXP MSER FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP RACK EXP MSER FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP RACK EXP MSER FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP RACK EXP MSER FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP RACK EXP MSER FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP RACK EXP MSER FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP RACK EXP MSER POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP RACK EXP MSER POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP RACK EXP MSER POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP RACK EXP MSER POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP RACK EXP MSER POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP RACK EXP MSER POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP ESCALERILLA CABLERA1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP ESCALERILLA CABLERA1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP ESCALERILLA CABLERA1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP ESCALERILLA CABLERA1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP ESCALERILLA CABLERA1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP ESCALERILLA CABLERA1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP ESCALERILLA CABLERA2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP ESCALERILLA CABLERA2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP ESCALERILLA CABLERA2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP ESCALERILLA CABLERA2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP ESCALERILLA CABLERA2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP ESCALERILLA CABLERA2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP HALO DE TIERRA1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP HALO DE TIERRA1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP HALO DE TIERRA1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP HALO DE TIERRA1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP HALO DE TIERRA1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP HALO DE TIERRA1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP HALO DE TIERRA2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP HALO DE TIERRA2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP HALO DE TIERRA2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP HALO DE TIERRA2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP HALO DE TIERRA2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP HALO DE TIERRA2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP SENSOR DE HUMO====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP SENSOR DE HUMO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP SENSOR DE HUMO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP SENSOR DE HUMO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP SENSOR DE HUMO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP SENSOR DE HUMO.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP SENSOR DE PUERTA====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP SENSOR DE PUERTA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP SENSOR DE PUERTA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP SENSOR DE PUERTA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP SENSOR DE PUERTA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP SENSOR DE PUERTA.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP SENSOR DE TEMPERATURA====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP SENSOR DE TEMPERATURA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP SENSOR DE TEMPERATURA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP SENSOR DE TEMPERATURA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP SENSOR DE TEMPERATURA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP SENSOR DE TEMPERATURA.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP LED LAG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP LED LAG.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP LED LAG.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP LED LAG.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP LED LAG.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP LED LAG.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP OTRO1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP OTRO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP OTRO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP OTRO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP OTRO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP OTRO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE POP OTRO2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE POP OTRO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE POP OTRO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE POP OTRO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE POP OTRO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE POP OTRO2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO PISO1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO PISO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO PISO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO PISO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO PISO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO PISO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO PISO2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO PISO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO PISO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO PISO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO PISO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO PISO2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO SUPRESOR DE PICOS====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO SUPRESOR DE PICOS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO SUPRESOR DE PICOS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO SUPRESOR DE PICOS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO SUPRESOR DE PICOS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO SUPRESOR DE PICOS.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO PUNCH BLOCK ALARMAS====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO PUNCH BLOCK ALARMAS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO PUNCH BLOCK ALARMAS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO PUNCH BLOCK ALARMAS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO PUNCH BLOCK ALARMAS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO PUNCH BLOCK ALARMAS.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO PASAMUROS====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO PASAMUROS.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO PASAMUROS.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO PASAMUROS.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO PASAMUROS.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO PASAMUROS.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO PASAMUROS 3G====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO PASAMUROS 3G.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO PASAMUROS 3G.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO PASAMUROS 3G.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO PASAMUROS 3G.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO PASAMUROS 3G.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO HVAC REJILLAS UNIDAD1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO HVAC REJILLAS UNIDAD2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO HVAC REJILLAS UNIDAD2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO RACK CONTROLLER FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO RACK CONTROLLER FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO RACK CONTROLLER FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO RACK CONTROLLER FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO RACK CONTROLLER FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO RACK CONTROLLER FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO RACK CONTROLLER POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO RACK CONTROLLER POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO RACK CONTROLLER POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO RACK CONTROLLER POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO RACK CONTROLLER POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO RACK CONTROLLER POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO RACK RF FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO RACK RF FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO RACK RF FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO RACK RF FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO RACK RF FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO RACK RF FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO RACK RF POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO RACK RF POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO RACK RF POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO RACK RF POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO RACK RF POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO RACK RF POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO RACK EXP MSER FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO RACK EXP MSER FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO RACK EXP MSER FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO RACK EXP MSER FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO RACK EXP MSER FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO RACK EXP MSER FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO RACK EXP MSER POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO RACK EXP MSER POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO RACK EXP MSER POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO RACK EXP MSER POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO RACK EXP MSER POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO RACK EXP MSER POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO ESCALERILLA CABLERA1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO ESCALERILLA CABLERA1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO ESCALERILLA CABLERA1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO ESCALERILLA CABLERA1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO ESCALERILLA CABLERA1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO ESCALERILLA CABLERA1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO ESCALERILLA CABLERA2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO ESCALERILLA CABLERA2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO ESCALERILLA CABLERA2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO ESCALERILLA CABLERA2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO ESCALERILLA CABLERA2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO ESCALERILLA CABLERA2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO HALO DE TIERRA1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO HALO DE TIERRA1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO HALO DE TIERRA1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO HALO DE TIERRA1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO HALO DE TIERRA1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO HALO DE TIERRA1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO HALO DE TIERRA2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO HALO DE TIERRA2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO HALO DE TIERRA2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO HALO DE TIERRA2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO HALO DE TIERRA2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO HALO DE TIERRA2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO SENSOR DE HUMO====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO SENSOR DE HUMO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO SENSOR DE HUMO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO SENSOR DE HUMO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO SENSOR DE HUMO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO SENSOR DE HUMO.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO SENSOR DE PUERTA====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO SENSOR DE PUERTA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO SENSOR DE PUERTA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO SENSOR DE PUERTA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO SENSOR DE PUERTA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO SENSOR DE PUERTA.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO SENSOR DE TEMPERATURA====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO SENSOR DE TEMPERATURA.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO SENSOR DE TEMPERATURA.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO SENSOR DE TEMPERATURA.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO SENSOR DE TEMPERATURA.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO SENSOR DE TEMPERATURA.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO LED LAG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO LED LAG.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO LED LAG.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO LED LAG.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO LED LAG.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO LED LAG.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO OTRO1====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO OTRO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO OTRO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO OTRO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO OTRO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO OTRO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================SITE TELCO OTRO2====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/SITE TELCO OTRO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/SITE TELCO OTRO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/SITE TELCO OTRO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/SITE TELCO OTRO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/SITE TELCO OTRO2.JPG", 80);





//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW RACK FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW RACK FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW RACK FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW RACK FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW RACK FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW RACK FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW RACK POSTERIOR====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW RACK POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW RACK POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW RACK POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW RACK POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW RACK POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW ATERRIZAJE DE RACK====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW ATERRIZAJE DE RACK.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW ATERRIZAJE DE RACK.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW ATERRIZAJE DE RACK.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW ATERRIZAJE DE RACK.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW ATERRIZAJE DE RACK.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW PATH AISLANTE====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW PATH AISLANTE.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW PATH AISLANTE.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW PATH AISLANTE.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW PATH AISLANTE.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW PATH AISLANTE.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW DSX FRONTAL====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW DSX FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW DSX FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW DSX FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW DSX FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW DSX FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW DSX POSTERIOR.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW DSX POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW DSX POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW DSX POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW DSX POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW DSX POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW DACS VISTA FRONTAL.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW DACS VISTA FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW DACS VISTA FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW DACS VISTA FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW DACS VISTA FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW DACS VISTA FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW DACS VISTA POSTERIOR.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW DACS VISTA POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW DACS VISTA POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW DACS VISTA POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW DACS VISTA POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW DACS VISTA POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW DACS PATH AISLANTE.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW DACS PATH AISLANTE.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW DACS PATH AISLANTE.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW DACS PATH AISLANTE.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW DACS PATH AISLANTE.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW DACS PATH AISLANTE.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW DACS ATERRIZAJE DE EQUIPO.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW DACS ATERRIZAJE DE EQUIPO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW DACS ATERRIZAJE DE EQUIPO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW DACS ATERRIZAJE DE EQUIPO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW DACS ATERRIZAJE DE EQUIPO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW DACS ATERRIZAJE DE EQUIPO.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW DACS OTRO1.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW DACS OTRO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW DACS OTRO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW DACS OTRO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW DACS OTRO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW DACS OTRO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW DACS OTRO2.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW DACS OTRO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW DACS OTRO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW DACS OTRO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW DACS OTRO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW DACS OTRO2.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW TELLABS VISTA FRONTAL.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW TELLABS VISTA FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW TELLABS VISTA FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW TELLABS VISTA FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW TELLABS VISTA FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW TELLABS VISTA FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW TELLABS VISTA POSTERIOR.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW TELLABS VISTA POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW TELLABS VISTA POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW TELLABS VISTA POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW TELLABS VISTA POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW TELLABS VISTA POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW TELLABS PATH AISLANTE.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW TELLABS PATH AISLANTE.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW TELLABS PATH AISLANTE.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW TELLABS PATH AISLANTE.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW TELLABS PATH AISLANTE.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW TELLABS PATH AISLANTE.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW TELLABS ATERRIZAJE DE EQUIPO.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW TELLABS ATERRIZAJE DE EQUIPO.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW TELLABS ATERRIZAJE DE EQUIPO.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW TELLABS ATERRIZAJE DE EQUIPO.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW TELLABS ATERRIZAJE DE EQUIPO.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW TELLABS ATERRIZAJE DE EQUIPO.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW TELLABS OTRO1.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW TELLABS OTRO1.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW TELLABS OTRO1.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW TELLABS OTRO1.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW TELLABS OTRO1.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW TELLABS OTRO1.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================MW TELLABS OTRO2.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/MW TELLABS OTRO2.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/MW TELLABS OTRO2.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/MW TELLABS OTRO2.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/MW TELLABS OTRO2.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/MW TELLABS OTRO2.JPG", 80);




//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================EVO NODOB RTN FRONTAL.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/EVO NODOB RTN FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/EVO NODOB RTN FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/EVO NODOB RTN FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/EVO NODOB RTN FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/EVO NODOB RTN FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================EVO NODOB RTN POSTERIOR.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/EVO NODOB RTN POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/EVO NODOB RTN POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/EVO NODOB RTN POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/EVO NODOB RTN POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/EVO NODOB RTN POSTERIOR.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================EVO RTN.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/EVO RTN.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/EVO RTN.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/EVO RTN.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/EVO RTN.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/EVO RTN.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================EVO BBU.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/EVO BBU.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/EVO BBU.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/EVO BBU.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/EVO BBU.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/EVO BBU.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================EVO CX600 FRONTAL.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/EVO CX600 FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/EVO CX600 FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/EVO CX600 FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/EVO CX600 FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/EVO CX600 FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================EVO CX600 POSTERIOR.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/EVO CX600 POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/EVO CX600 POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/EVO CX600 POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/EVO CX600 POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/EVO CX600 POSTERIOR.JPG", 80);


//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================EVO APM30 FRONTAL.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/EVO APM30 FRONTAL.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/EVO APM30 FRONTAL.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/EVO APM30 FRONTAL.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/EVO APM30 FRONTAL.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/EVO APM30 FRONTAL.JPG", 80);

//====================================================================================================
//====================================================================================================
//====================================================================================================
//===========================EVO APM30 POSTERIOR.JPG====================
$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./fotos/temporal/EVO APM30 POSTERIOR.JPG");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./fotos/temporal/EVO APM30 POSTERIOR.JPG" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./fotos/temporal/EVO APM30 POSTERIOR.JPG" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./fotos/temporal/EVO APM30 POSTERIOR.JPG" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./fotos/temporal/EVO APM30 POSTERIOR.JPG", 80);



?>

