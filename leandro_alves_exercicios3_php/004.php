<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/
$a = 10;
$b = 1;
$c = 40;

function get_bigger_number(int $first_number, int $second_number, int $third_number)
{
	if($first_number > $second_number and $first_number > $third_number)
	{
		$bigger_number = $first_number;
	}elseif($second_number > $first_number and $second_number > $third_number)
	{
		$bigger_number = $second_number;
	} else
	{
		$bigger_number = $third_number;
	}
	return $bigger_number;
}

echo '<br>' . "The bigger number is " . get_bigger_number($a, $b, $c) . '<br>';
?>