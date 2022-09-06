<?php
require_once("014_a.php");

/*
Importar a função criada em 014_a.php para ser utilizada aqui.
*/

$nota_1 = 9;
$nota_2 = 4;
// Calcular chamando a função

echo "<br>";
calculo_media($nota_1, $nota_2);
echo "<br>";

$nota_1 = 1;
$nota_2 = 5;
// Calcular chamando a função

calculo_media($nota_1, $nota_2);
echo "<br>";

$nota_1 = 5;
$nota_2 = 3;
// Calcular chamando a função

calculo_media($nota_1, $nota_2);
echo "<br>";
?>