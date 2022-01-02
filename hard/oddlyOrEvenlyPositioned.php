<?php
/*Oddly or Evenly Positioned
Create a function that returns the characters from an array or string r on odd or even positions, depending on the specifier s. The specifier will be "odd" for items on odd positions (1, 3, 5, ...) and "even" for items on even positions (2, 4, 6, ...).

Examples
charAtPos([2, 4, 6, 8, 10], "even") ➞ [4, 8]
// 4 & 8 occupy the 2nd & 4th positions

charAtPos("EDABIT", "odd") ➞ "EAI"
// "E", "A" and "I" occupy the 1st, 3rd and 5th positions

charAtPos(["A", "R", "B", "I", "T", "R", "A", "R", "I", "L", "Y"], "odd") ➞ ["A", "B", "T", "A", "I", "Y"]
Notes
Arrays are zero-indexed, so, index+1 = position or position-1 = index.
There will not be an empty string or an empty array.
A slightly different version of this challenge can be found here.
A recursive version of this challenge can be found here. */
function charAtPos($r, $s) {
	$result = [];
	$length = is_string($r) ? strlen($r) : count($r);
	$initial = $s === "even" ? 1 : 0;
  for ($i = $initial;$i < $length; $i+=2) {
    array_push($result, $r[$i]);
  }
  if (is_string($r)) $result = join("", $result);
  return $result;
}

echo charAtPos([2,4,6,8,10],"even") === [4,8];
echo charAtPos([1,2,3,4,5,6,7,8,9,10],"odd") === [1,3,5,7,9];
echo charAtPos("EDABIT","even") === "DBT";
echo charAtPos("EDABIT","odd") ===  "EAI";
echo charAtPos("QWERTYUIOP","even") === "WRYIP";
echo charAtPos("POIUYTREWQ","odd") === "PIYRW";
echo charAtPos("ASDFGHJKLZ","odd") === "ADGJL";
echo charAtPos("ASDFGHJKLZ","even") === "SFHKZ";
echo charAtPos(["!","@","#","$","%","^","&","*","(",")"],"odd") === ["!","#","%","&","("];
echo charAtPos([")","(","*","&","^","%","$","#","@","!"],"odd") === [")","*","^","$","@"];
echo charAtPos(["A","R","B","I","T","R","A","R","I","L","Y"],"odd") === ["A","B","T","A","I","Y"];
