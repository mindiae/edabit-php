<?php
/*Beginning and End Pairs
Write a function that pairs the first number in an array with the last, the second number with the second to last, etc.

Examples
pairs([1, 2, 3, 4, 5, 6, 7]) ➞ [[1, 7], [2, 6], [3, 5], [4, 4]]

pairs([1, 2, 3, 4, 5, 6]) ➞ [[1, 6], [2, 5], [3, 4]]

pairs([5, 9, 8, 1, 2]) ➞ [[5, 2], [9, 1], [8, 8]]

pairs([]) ➞ []
Notes
If the array has an odd length, repeat the middle element twice for the last pair.
Return an empty array if the input is an empty array.
*/
function pairs($arr) {
  $fixedArr = $arr;
  $result = [];
 	for ($i=0;$i<ceil(count($fixedArr)/2);$i++) {
 	  $lastPair = array_pop($arr);
 	  array_push($result, [$fixedArr[$i],$lastPair]);
 	}
 	return $result;
}
echo pairs([1, 2, 3, 4, 5, 6, 7]) === [[1, 7], [2, 6], [3, 5], [4, 4]];
echo pairs([1, 2, 3, 4, 5, 6]) === [[1, 6], [2, 5], [3, 4]];
echo pairs([5, 9, 8, 1, 2]) === [[5, 2], [9, 1], [8, 8]];
echo pairs([5, 6, 7]) === [[5, 7], [6, 6]];
echo pairs([1, 1, 4, 4, 5, 5]) === [[1, 5], [1, 5], [4, 4]];
echo pairs([9, 9, 9, 9, 3, 3, 9]) === [[9, 9], [9, 3], [9, 3], [9, 9]];
echo pairs([5, 6]) === [[5, 6]];
echo pairs([5]) === [[5, 5]];
echo pairs([]) === [];