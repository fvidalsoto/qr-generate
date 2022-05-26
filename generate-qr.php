<?php
require "./vendor/autoload.php";

//Agregamos la librería para genera códigos QR
include "./library/phpqrcode/phpqrcode.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$archivo = $_FILES['file_points']['tmp_name'];

$spreadsheet = new Spreadsheet();
$spreadsheet = IOFactory::load($archivo);
$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
$sheet = $spreadsheet->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();

//Declaramos una carpeta temporal para guardar la imágenes generadas

$tamaño = $_POST['size'] ?? 10; //Tamaño de Pixel
$level = $_POST['level'] ?? 'H'; //Precisión Baja
$framSize = $_POST['framSize'] ?? 1; //Tamaño en blanco

$dir = 'qr-codes/';

//Si no existe la carpeta la creamos
if (!file_exists($dir))
    mkdir($dir);

for ($row = 2; $row <= $highestRow; $row++) {

    $codigo = $sheet->getCell("A" . $row)->getValue();
    $orden = $sheet->getCell("B" . $row)->getValue();;
    $nombre_recorrido = $sheet->getCell("C" . $row)->getValue();

    if ($codigo != '' && $orden != '' && $nombre_recorrido != '') {

        //Usar expresion regular --> https://www.php.net/manual/es/function.preg-replace.php
        $codigo_formated = str_replace('/', '-', $codigo);
        $nombre_recorrido = str_replace('/', '-', $nombre_recorrido);

        $dir = 'qr-codes/' . $nombre_recorrido . '/';

        //Si no existe la carpeta la creamos
        if (!file_exists($dir))
            mkdir($dir);

        //Declaramos la ruta y nombre del archivo a generar
        $filename = $dir . $orden . '. ' . $codigo_formated . ' - ' . $nombre_recorrido . '.png';

        //Enviamos los parámetros a la Función para generar código QR 
        QRcode::png($codigo, $filename, $level, $tamaño, $framSize);
    } else {
        die("2");
    }
}

//Creamos el archivo
$zip = new \ZipArchive();
$filename = 'CodigosQR.zip';
//abrimos el archivo y lo preparamos para agregarle archivos
$zip->open($filename, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

//indicamos cual es la carpeta que se quiere comprimir
$origen = realpath('qr-codes');

//Ahora usando funciones de recursividad vamos a explorar todo el directorio y a enlistar todos los archivos contenidos en la carpeta
$files = new \RecursiveIteratorIterator(
    new \RecursiveDirectoryIterator($origen),
    \RecursiveIteratorIterator::LEAVES_ONLY
);

//Ahora recorremos el arreglo con los nombres los archivos y carpetas y se adjuntan en el zip
foreach ($files as $name => $file) {
    if (!$file->isDir()) {
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($origen) + 1);

        $zip->addFile($filePath, $relativePath);
    }
}

//Se cierra el Zip
$zip->close();

$files = glob('qr-codes/*/*'); //obtenemos todos los nombres de las imagnes
foreach ($files as $file) {
    if (is_file($file))
        unlink($file); //elimino la img
}
//elimino el directorio que ya he vaciado

echo 1;
