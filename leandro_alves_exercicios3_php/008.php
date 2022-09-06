<?php
/*
Descrubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 

Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 1;

if($numero % 3 != 0 and $numero % 10 != 0)
{
    echo "The number " . $numero . " isn't divisible for 3 and 10!";
} else
{
    if($numero % 10 == 0)
    {
        echo "The number " . $numero . " is divisible for 10! <br>";
    } else
    {
        echo "The number " . $numero . " isn't divisible for 10! <br>";
    };

    if($numero % 3 == 0)
    {
        echo "The number " . $numero . " is divisible for 3!";
    } else
    {
        echo "The number " . $numero . " isn't divisible for 3!";
    }
};

?>