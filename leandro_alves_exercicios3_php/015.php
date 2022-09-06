<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.

Crie uma função com o nome calculo_media.
Crie validações na função, para que os parâmetros aceitos estejam 
entre 0 e 10.
Crie constantes para os limites ( 0 e 10 )
*/

$nota_1 = 10;
$nota_2 = 10;

function calculo_media(float $nota_1, float $nota_2)
{
    define("from", 0);
    define("to", 10);

    if($nota_1 >= from and $nota_1 <= to and $nota_2 > from and $nota_2 <= to)
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
    } else
    {
        echo "The variables are not in the right range!";
    }
}

calculo_media($nota_1, $nota_2);

?>
