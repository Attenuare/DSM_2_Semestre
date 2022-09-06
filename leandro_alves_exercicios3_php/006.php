<?php
/*
Crie um script que apresente o tipo de $array e os valores presentes.
Neste mesmo script, tente acessar na $array com a chave 'teste' e descubra o que acontece.
*/

$array = [
    "n1" => 10,
    "n2" => 20,
    "n3" => 30,
    "n4" => 'oi mundo',
];

echo '<br>' . "This variable type is " . gettype($array);
foreach ($array as $key => $element)
{
    echo '<br>' . "The element " . $key . " has value " . $element . " is " . gettype($element);
}

/*
echo '<br>' . "This variable type is " . gettype($array);
foreach ($array as $key => $element)
{
    echo '<br>' . "The element " . $teste . " has value " . $element . " is " . gettype($element);
}
*/
?>