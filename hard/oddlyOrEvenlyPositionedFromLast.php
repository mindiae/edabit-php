<?php
/*Oddly or Evenly Positioned From Last
Create a function that extracts the characters from an array (or a string) on odd or even positions, depending on the specifier. The string "odd" for items on odd positions (... 5, 3, 1) and "even" for even positions (... 6, 4, 2) from the last item of that array or string.

Examples
charAtPos([2, 4, 6, 8, 10], "even") ➞ [4, 8]
// 4 & 8 occupy the 4th & 2nd positions from right.

charAtPos("EDABIT", "odd") ➞ "DBT"
// "D", "B" and "T" occupy the 5th, 3rd and 1st positions from right.

charAtPos([")", "(", "*", "&", "^", "%", "$", "#", "@", "!"], "odd") ➞ ["(", "&", "%", "#", "!"]
Notes
Arrays are zero-indexed, so, index+1 = position or position-1 = index.
An easier version of this challenge can be found via this link.
A recursive version of this challenge can be found via this link.
*/
function charAtPos($r, $s) {
  $result = [];
	$length = is_string($r) ? strlen($r) : count($r);
	$initial = $s === "even" ? $length - 2 : $length - 1;
  for ($i = $initial;$i >=0 ; $i-=2) {
    array_push($result, $r[$i]);
  }
  $result = array_reverse($result);
  if (is_string($r)) $result = join("", $result);
  return $result;
}

echo charAtPos("EDABIT", "even") === "EAI";
echo charAtPos("EDABIT", "odd") === "DBT";
echo charAtPos("QWERTYUIOP", "even") === "QETUO";
echo charAtPos("POIUYTREWQ", "odd") === "OUTEQ";
echo charAtPos("ASDFGHJKLZ", "odd") === "SFHKZ";
echo charAtPos("ASDFGHJKLZ", "even") === "ADGJL";
echo charAtPos([2, 4, 6, 8, 10], "even") === [4, 8];
echo charAtPos([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], "odd") === [2, 4, 6, 8, 10];
echo charAtPos(["!", "@", "#", "$", "%", "^", "&", "*", "(", ")"], "odd") === ["@", "$", "^", "*", ")"];
echo charAtPos([")", "(", "*", "&", "^", "%", "$", "#", "@", "!"], "odd") === ["(", "&", "%", "#", "!"];
echo charAtPos(["A", "R", "B", "I", "T", "R", "A", "R", "I", "L", "Y"], "odd") === ["A", "B", "T", "A", "I", "Y"];