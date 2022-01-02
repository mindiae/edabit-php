<?php
/*Find the Second Largest Number
Create a function that takes a list of numbers and returns the second largest number.

Examples
secondLargest([10, 40, 30, 20, 50]) ➞ 40
secondLargest([25, 143, 89, 13, 105]) ➞ 105
secondLargest([54, 23, 11, 17, 10]) ➞ 23
Notes
There will be at least two numbers in the array.*/
function secondLargest($a) {
	rsort($a);
	return $a[1];
}

echo 40 === secondLargest([10, 40, 30, 20, 50]);
echo 105 === secondLargest([25, 143, 89, 13, 105]);
echo 23 === secondLargest([54, 23, 11, 17, 10]);
echo 417 === secondLargest([513, 211, 131, 417, 11]);
echo 65 === secondLargest([63, 44, 11, 22, 33, 66, 65]);