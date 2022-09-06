<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.
*/
$nota_1 = 9;
$nota_2 = 4;

function calculo_media(float $nota_1, float $nota_2)
{
    $average = ($nota_1 + $nota_2) / 2;
    echo "The student average is " . $average . "<br>";
    if($average <= 4.9)
    {
        echo "The student wasn't aproved! <br>";
    } else if($average >= 5 and $average <= 7)
    {
        echo "The student need to do a test for grades recovery! <br>";
    } else
    {
        echo "The student is aproved!";
    }
}

/*
calculo_media($nota_1, $nota_2);
echo "<br>";
*/
?>