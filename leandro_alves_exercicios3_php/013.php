<?php
/*
Crie uma função que demonstre 
 - Passagem por valor.
 - Passagem por referência.
*/

function parameter_reference(&$parameter)
{
    $parameter = $parameter . " This is a parameter passed by reference!";
}

function parameter_value($parameter)
{
    $parameter = $parameter . " This is a parameter passed by Value!";
    return $parameter;
}

$parameter = "Testing parameter! =>";

echo $parameter . "<br>";
echo parameter_value($parameter) . "<br>";
echo $parameter . "<br>";
parameter_reference($parameter);
echo $parameter . "<br>";
?>