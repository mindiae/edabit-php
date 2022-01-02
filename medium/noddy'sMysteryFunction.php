<?php
/*Noddy's Mystery Function
Noddy has written a mysterious function which takes in a word and returns true if it's passed a specific test. Solve the riddle of what Noddy's function is by having a look at some of the examples below.

Examples
noddyFunction("FANTASTIC") ➞ true

noddyFunction("wonderful") ➞ false

noddyFunction("NODDY") ➞ false
Notes
Check the Tests tab for more examples.
This isn't really a coding challenge, more of a fun riddle ;) */
function noddyFunction($str) {
	if (preg_match("/[dD]/", $str)) {
	  return false;
	} else {
	  return true;
	}
}

echo noddyFunction("fantastic") === true;
echo noddyFunction("wonderful") === false;
echo noddyFunction("noddy") === false;
echo noddyFunction("blessed") === false;
echo noddyFunction("Wonder") === false;
echo noddyFunction("waterfall") === true;
echo noddyFunction("nature") === true;
echo noddyFunction("ADVENTUROUS") === false;
echo noddyFunction("Benevolent") === true;
echo noddyFunction("courageous") === true;
echo noddyFunction("End") === false;
echo noddyFunction("virtue") === true;
echo noddyFunction("Kindness") === false;
echo noddyFunction("CREATURE") === true;
echo noddyFunction("Planet") === true;
echo noddyFunction("disaster") === false;
echo noddyFunction("possibility") === true;
echo noddyFunction("Inspiration") === true;
echo noddyFunction("Hope") === true;
echo noddyFunction("nurture") === true;
echo noddyFunction("UNDERSTANDING") === false;
echo noddyFunction("Edabit") === false;