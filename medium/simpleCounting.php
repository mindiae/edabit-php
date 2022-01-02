<?php
/*Simple Counting
Mubashir needs your help to count a specific digit in an array.

You have to create a function that takes two integers $n and $d and makes an array of squares of all numbers from 0...<= n and returns the count of the digits $d in the array.

Examples
countDigits(10, 1) ➞ 4
// Squared array from 0 to 10 = [0, 1, 4, 9, 16, 25, 36, 49, 64, 81, 100]
// Digit 1 appeared 4 times in the array

countDigits(25, 2) ➞ 9

countDigits(10, 1) ➞ 4
Notes
$d will always be 0<=d<10.  */

function countDigits($n, $d) {
	$range = range(0, $n);
	$squares = array_map(function($n){
	  return $n * $n;
	},$range);
	$count = array_reduce($squares,
	  function($c, $n) use($d) {
	    $array = str_split(strval($n));
	    $c += count(array_keys($array, strval($d)));
	    return $c;
	}, 0);
	return $count;
}

echo countDigits(10, 1) === 4;
echo countDigits(25, 2) === 9;
echo countDigits(17, 3) === 1;
echo countDigits(5750, 0) === 4700;
echo countDigits(11011, 2) === 9481;
echo countDigits(12224, 8) === 7733;
echo countDigits(11549, 1) === 11905;
echo countDigits(14550, 7) === 8014;
echo countDigits(8304, 7) === 3927;
echo countDigits(10576, 9) === 7860;
echo countDigits(12526, 1) === 13558;
echo countDigits(7856, 4) === 7132;
echo countDigits(14956, 1) === 17267;
