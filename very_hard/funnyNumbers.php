<?php
/*
Funny Numbers
Mubashir was playing with some numbers. He observed some funny numbers.

Funny Numbers
89 --> 8¹ + 9² = 89 * 1

695 --> 6² + 9³ + 5⁴ = 1390 = 695 * 2

46288 --> 4³ + 6⁴ + 2⁵ + 8⁶ + 8⁷ = 2360688 = 46288 * 51
Create a function which takes a number $n and a positive integer $p and returns a positive integer k, such as the sum of the digits of $n taken to the successive powers of p is equal to k * n.

In other words, is there an integer k such as:

(a ^ p + b ^ (p+1) + c ^(p+2) + d ^ (p+3) + ... ) = n * k
// A given number = n
// A given positive integer = p
// Digits of the given number = a, b, c, d ...
// A positive integer = k
Your function should return null if k is not found.

Examples
funnyNumbers(89, 1) ➞ 1
// since 8¹ + 9² = 89 = 89 * 1

funnyNumbers(92, 1) ➞ null
// since there is no k such as 9¹ + 2² equals 92 * k

funnyNumbers(695, 2) ➞ 2
// 6² + 9³ + 5⁴= 1390 = 695 * 2
Notes
Given number and power will always >=1
*/
function funnyNumbers($n, $p) {
	$str = strval($n);
	$sumOfPowers = 0;
	for ($i = 0; $i<strlen($str); $i++) {
	  $sumOfPowers += $str[$i] ** ($p + $i);
	}
	$result = $sumOfPowers / $n;
	return is_int($result) ? $result : NULL;
}

echo funnyNumbers(89, 1) === 1;
echo funnyNumbers(92, 1) === NULL;
echo funnyNumbers(46288, 3) === 51;
echo funnyNumbers(114, 3) === 9;
echo funnyNumbers(46288, 5) === NULL;
echo funnyNumbers(135, 1) === 1;
echo funnyNumbers(175, 1) === 1;
echo funnyNumbers(518, 1) === 1;
echo funnyNumbers(598, 1) === 1;
echo funnyNumbers(1306, 1) === 1;
echo funnyNumbers(2427, 1) === 1;
echo funnyNumbers(2646798, 1) === 1;
echo funnyNumbers(3456789, 1) === NULL;
echo funnyNumbers(3456789, 5) === NULL;
echo funnyNumbers(198, 1) === 3;
echo funnyNumbers(249, 1) === 3;
echo funnyNumbers(1377, 1) === 2;
echo funnyNumbers(1676, 1) === 1;
echo funnyNumbers(695, 2) === 2;
echo funnyNumbers(1878, 2) === 19;
echo funnyNumbers(7388, 2) === 5;
echo funnyNumbers(47016, 2) === 1;
echo funnyNumbers(542186, 2) === 1;
echo funnyNumbers(261, 3) === 5;
echo funnyNumbers(1385, 3) === 35;
echo funnyNumbers(2697, 3) === 66;
echo funnyNumbers(6376, 3) === 10;
echo funnyNumbers(6714, 3) === 1;
echo funnyNumbers(63760, 3) === 1;
echo funnyNumbers(63761, 3) === 1;
echo funnyNumbers(132921, 3) === 4;
echo funnyNumbers(10383, 6) === 12933;