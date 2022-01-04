<?php
/*
Frequency by Level of Nesting
Create a function that takes in a nested array and an element and returns the frequency of that element by nested level.

Examples
freqCount([1, 4, 4, [1, 1, [1, 2, 1, 1]]], 1)
➞ [[0, 1], [1, 2], [2, 3]]
# The array has one 1 at level 0, 2 1's at level 1, and 3 1's at level 2.

freqCount([1, 5, 5, [5, [1, 2, 1, 1], 5, 5], 5, [5]], 5)
➞ [[0, 3], [1, 4], [2, 0]]

freqCount([1, [2], 1, [[2]], 1, [[[2]]], 1, [[[[2]]]]], 2)
➞ [[0, 0], [1, 1], [2, 1], [3, 1], [4, 1]]
Notes
Start the default nesting (an array with no nesting) at 0.
Output the nested levels in order (e.g. 0 first, then 1, then 2, etc.).
Output 0 for the frequency if that particular level has no instances of that element (see example #2).
*/
function freqCount($arr, $el) {
  $result = [];
  $flattened = [];
  $count = 0;
  for ($level = 0; count($arr) > 0; $level++) {
    for ($i=0; $i < count($arr); $i++) {
      if ($arr[$i] === $el) $count++;
      if (is_array($arr[$i])) {
        $flattened = array_merge(
          $flattened,
          $arr[$i]
        );
      }
    }
    array_push($result, [$level, $count]);
    $arr = $flattened;
    $count = 0;
    $flattened = [];
  }
  return $result;
}

echo [[0, 4]] === freqCount([1, 1, 1, 1], 1);
echo [[0, 2]] === freqCount([1, 1, 2, 2], 1);
echo [[0, 2], [1, 1]] === freqCount([1, 1, 2, [1]], 1);
echo [[0, 2], [1, 0], [2, 1]] === freqCount([1, 1, 2, [[1]]], 1);
echo [[0, 0], [1, 0], [2, 1]] === freqCount([[[1]]], 1);
echo [[0, 1], [1, 2], [2, 3]] === freqCount([1, 4, 4, [1, 1, [1, 2, 1, 1]]], 1);
echo [[0, 3], [1, 4], [2, 0]] === freqCount([1, 5, 5, [5, [1, 2, 1, 1], 5, 5], 5, [5]], 5);
echo [[0, 0], [1, 1], [2, 1], [3, 1], [4, 1]] === freqCount([1, [2], 1, [[2]], 1, [[[2]]], 1, [[[[2]]]]], 2);