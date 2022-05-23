<?php

//Agregamos la librería para genera códigos QR
include "./library/phpqrcode/phpqrcode.php";

//Declaramos una carpeta temporal para guardar la imágenes generadas
$dir = 'qr-codes/';

//Si no existe la carpeta la creamos
if (!file_exists($dir))
    mkdir($dir);

//Declaramos la ruta y nombre del archivo a generar
$filename = $dir . 'test.png';

//Parámetros de Configuración

$tamaño = $_POST['size'] ?? 10; //Tamaño de Pixel
$level = $_POST['level'] ?? 'H'; //Precisión Baja
$framSize = $_POST['framSize'] ?? 1; //Tamaño en blanco
$contenido = $_POST['data'];
/* $contenido = "http://codigosdeprogramacion.com"; //Texto */

//Enviamos los parámetros a la Función para generar código QR 
QRcode::png($contenido, $filename, $level, $tamaño, $framSize);

echo '1';
