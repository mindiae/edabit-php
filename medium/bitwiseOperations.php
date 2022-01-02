<?php
/*Bitwise Operations
A decimal number can be represented as a sequence of bits. To illustrate:

6 = 00000110
23 = 00010111
From the bitwise representation of numbers, we can calculate the bitwise AND === bitwise OR and bitwise XOR. Using the example above:

bitwiseAND(6, 23) ➞ 00000110

bitwiseOR(6, 23) ➞ 00010111

bitwiseXOR(6, 23) ➞ 00010001
Write three functions to calculate the bitwise AND === bitwise OR and bitwise XOR of two numbers.

Examples
bitwiseAND(7, 12) ➞ 4
bitwiseOR(7, 12) ➞ 15
bitwiseXOR(7, 12) ➞ 11
Notes
N/A*/
function bitwiseAND($n1, $n2) {
	return $n1 & $n2;
}

function bitwiseOR($n1, $n2) {
	return $n1 | $n2;
}

function bitwiseXOR($n1, $n2) {
	return $n1 ^ $n2;
}

echo 4 === bitwiseAND(7, 12);
echo 15 === bitwiseOR(7, 12);
echo 11 === bitwiseXOR(7, 12);
echo 0 === bitwiseAND(32, 17);
echo 49 === bitwiseOR(32, 17);
echo 49 === bitwiseXOR(32, 17);
echo 1 === bitwiseAND(13, 19);
echo 31 === bitwiseOR(13, 19);
echo 30 === bitwiseXOR(13, 19);