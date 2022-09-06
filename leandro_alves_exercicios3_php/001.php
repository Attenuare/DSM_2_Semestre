<?php
/*
Variáveis 
*/

// Imprimir o valor a variável e o seu tipo
$variavel_1 = 'texto';
echo '<br>' . "The variable " . $variavel_1 . ' is ' . gettype($variavel_1);

// Imprimir o valor a variável e o seu tipo
$variavel_2 = 123;
echo '<br>' . "The variable " . $variavel_2 . ' is ' . gettype($variavel_2);

// Imprimir o valor a variável e o seu tipo
$variavel_3 = 1;
echo '<br>' . "The variable " . $variavel_3 . ' is ' . gettype($variavel_3);

$array = [
    "foo" => "bar",
    "bar" => "foo",
];

// Imprimir o valor a variável e o seu tipo
echo '<br>' . "The variable " . print_r($array) . ' is ' . gettype($array);
?>