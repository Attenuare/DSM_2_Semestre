<?php
/*
Crie um script que percorra toda a $array, apresentando os valores.
Utilize foreach.
Adapte o código para exibir somente os valores inteiros.
Realize a soma dos números inteiros

Dica: https://www.php.net/manual/en/control-structures.foreach.php
*/ 
$array = [
    "n1" => 10,
    "n2" => 20,
    "n3" => 30,
    "n4" => 'oi mundo',
];

$final_value = 0;
foreach($array as $key => $value)
{
    if(is_integer($value))
        {
            echo "<br> The value " . $value . " is " . gettype($value);
            $final_value += $value;
        }
}
echo "<br>" . "The final value is " . $final_value;
?>