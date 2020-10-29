<?php
require '../Model/Calculadora.php';
$operador = $_POST['operador'];
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$data = file_get_contents("../dades/dades.dat");
$calculadora = unserialize($data, ['allowed_classes' => true]);

$calculadora[]=new Calculadora( $operador,  $numero1,  $numero2);

include '../Vista/veure.php';

$file = fopen("../dades/dades.dat", "w"); // Abrir
fwrite($file,serialize($calculadora));
fclose($file); // Cerrar




?>