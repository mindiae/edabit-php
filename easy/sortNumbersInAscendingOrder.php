<?php
/*Sort Numbers in Ascending Order
Create a function that takes an array of numbers and returns a new array, sorted in ascending order (smallest to biggest).

Sort numbers array in ascending order.
If the function's argument is null, an empty array, or undefined; return an empty array.
Return a new array of sorted numbers.
Examples
sortNumsAscending([1, 2, 10, 50, 5]) ➞ [1, 2, 5, 10, 50]

sortNumsAscending([80, 29, 4, -95, -24, 85]) ➞ [-95, -24, 4, 29, 80, 85]

sortNumsAscending(null) ➞ []

sortNumsAscending([]) ➞ []
Notes
Test input can be positive or negative.*/
function sortNumsAscending($arr) {
  if (!isset($arr)) {
    return [];
  }
  sort($arr);
  return $arr;
}
echo [1, 2, 5, 10, 50] === sortNumsAscending([1, 2, 10, 50, 5]);
echo [-95, -24, 4, 29, 80, 85] === sortNumsAscending([80, 29, 4, -95, -24, 85]);
echo [] === sortNumsAscending(null);
echo [] === sortNumsAscending([]);
echo [-85, -27, -17, -16, -16, -8, 47, 47, 51, 91] === sortNumsAscending([47, 51, -17, -16, 91, 47, -85, -8, -16, -27]);
echo [-76, -73, -51, -14, 65, 69, 74] === sortNumsAscending([-51, -73, 65, 69, -76, 74, -14]);
echo [21, 33, 35, 45, 65, 97, 98] === sortNumsAscending([45, 98, 35, 65, 97, 21, 33]);
echo [-69, -54, -32, -23, -2] === sortNumsAscending([-23, -69, -54, -2, -32]);
echo [-96, -21, -9] === sortNumsAscending([-21, -9, -96]);
echo [0] === sortNumsAscending([0]);