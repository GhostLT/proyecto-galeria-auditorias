<?php
//cambiar a como quiera la imagen
$ruta_imagen = "ruta/imagen/original.jpg";

$miniatura_ancho_maximo = 447;
$miniatura_alto_maximo = 279;

$info_imagen = getimagesize("./imagen/aprilia classic.jpg");
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( "./imagen/aprilia classic.jpg" );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( "./imagen/aprilia classic.jpg" );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( "./imagen/aprilia classic.jpg" );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, "./imagen/aprilia classic.jpg", 80);

?>