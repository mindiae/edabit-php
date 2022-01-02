<?php
/*Count the Primes within a Range
Given two integers create a function that counts the number of primes between the two given integers.

Examples
primeCount(1, 10) ➞ 4
// range = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
// primes = [2, 3, 5, 7]
// answer = 4

primeCount(1, 100) ➞ 25

primeCount(1, 1000) ➞ 168
Notes
If there are no primes within the given range, return 0.
*/
function primeCount($a, $b) {
	$range = range($a, $b);
	$answer = 0;
	$rangeCount = count($range);
	for ($i = 0; $i < $rangeCount; $i++) {
	  $bCheck = True;
	  for ($j = 2; $j < $range[$i]; $j++) {
	    if ($range[$i] % $j == 0) {
	      $bCheck = False;
	      break;
	    }
	  }
	  if ($bCheck) $answer++;
	}
	return $answer;
}

echo primeCount(1, 10) === 4;
echo primeCount(1, 100) === 25;
echo primeCount(1, 1000) === 168;
//echo primeCount(1, 10000) === 1229;
//echo primeCount(1, 100000) === 9592;
echo primeCount(2090, 2098) === 0;
echo primeCount(548, 556) === 0;
echo primeCount(3297, 4297) === 128;