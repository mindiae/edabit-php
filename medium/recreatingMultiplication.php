<?php
/*Recreating Multiplication
Create a function that takes two numbers $n1 $n2 and multiplies them without using *.

Examples
multiply(3, 2) ➞ 6
multiply(4, 10) ➞ 40
multiply(-2, 4) ➞ -8
Notes
Do not use * for this challenge.*/
function multiply($n1, $n2) {
	$result = 0;
	for ($i = 0; $i < $n2; $i++) {
	  $result += $n1;
	}
	return $result;
}

echo multiply(3, 2) === 6;
echo multiply(9, 1) === 9;
echo multiply(2, 2) === 4;
echo multiply(1, 1) === 1;
echo multiply(702, 392) === 275184;
echo multiply(9, 9) === 81;
echo multiply(40, 31) === 1240;
echo multiply(4, 10) === 40;
echo multiply(-2, 4) === -8;
echo multiply(-3, -20) === 60;
echo multiply(40, -10) === -400;