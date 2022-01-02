<?php
/*Change the Word
Given a string, reverse its order, change lowercase letters to uppercase and increment uppercase letters by one (e.g. A becomes B, C becomes D, Z becomes A).

Examples
changeString("ApPle") ➞ "ELQPB"

changeString("draGON") ➞ "OPHARD"

changeString("ZebrA") ➞ "BRBEA"
Notes
Remember capital "Z" becomes "A".
*/
function changeString($word) {
	$letters = str_split($word);
	$letters = array_map(function($val) {
	  if ($val == "Z") return "A";
	  elseif ($val == strtoupper($val)) {
	    return chr(ord($val)+1);
	  }
	  return strtoupper($val);
	}, $letters);
	$letters = array_reverse($letters);
	return join("", $letters);
}

echo changeString("ApPle") === "ELQPB";
echo changeString("draGON") === "OPHARD";
echo changeString("ZebrA") ===  "BRBEA";
echo changeString("sNaKe") === "ELAOS";
echo changeString("MElon") === "NOLFN";