<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/

$a = 10;
$b = 1;

function get_bigger_number(int $first_number, int $second_number)
{
	if($first_number > $second_number)
	{
		$bigger_number = $first_number;
	}else
	{
		$bigger_number = $second_number;
	}
	return $bigger_number;
}

echo '<br>'. "The bigger number is " . get_bigger_number($a, $b);

?>