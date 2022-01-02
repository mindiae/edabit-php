<?php
/*
Converting One Binary String to Another
Write a function that returns the minimum number of swaps to convert the first binary string into the second.

Examples
minSwaps("1100", "1001") ➞ 1

minSwaps("110011", "010111") ➞ 1

minSwaps("10011001", "01100110") ➞ 4
Notes
Both binary strings will be of equal length.
Both binary strings will have an equal number of zeroes and ones.
A swap is switching two elements in a string (swaps do not have to be adjacent).
*/
function minSwaps($s1, $s2) {
  $diff = 0;
	for ($i = 0; $i<strlen($s1);$i++) {
	  if ((int)$s1[$i] ^ (int)$s2[$i]) {
	    $diff ++;
	  }
	}
	return $diff / 2;
}

echo minSwaps("1001", "1001") === 0;
echo minSwaps("1100", "1001") === 1;
echo minSwaps("110011", "010111") === 1;
echo minSwaps("1100", "0011") === 2;
echo minSwaps("110011", "001111") === 2;
echo minSwaps("10011001", "01100101") === 3;
echo minSwaps("11111000001100", "10110010100110") === 3;
echo minSwaps("01100100100111", "10110010100110") === 3;
echo minSwaps("11110011001", "01100110111") === 3;
echo minSwaps("100110001", "010100110") === 3;
echo minSwaps("100101011", "011001101") === 3;
echo minSwaps("10011001", "01100110") === 4;
