<?php
/*Where is Bob!?!
Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. If Bob is not in the array, return -1.

Examples
findBob(["Jimmy", "Layla", "Bob"]) ➞ 2
findBob(["Bob", "Layla", "Kaitlyn", "Patricia"]) ➞ 0
findBob(["Jimmy", "Layla", "James"]) ➞ -1
Notes
Assume all names start with a capital letter and are lowercase thereafter (i.e. don't worry about finding "BOB" or "bob").*/
function findBob($names) {
  if (in_array("Bob", $names)) {
    return array_search("Bob", $names);
  }
	return -1;
}
echo -1 === findBob(["Jimmy", "Layla", "Mandy"]);
echo 0 === findBob(["Bob", "Nathan", "Hayden"]);
echo 2 === findBob(["Paul", "Layla", "Bob"]);
echo 3 === findBob(["Garry", "Maria", "Bethany", "Bob", "Pauline"]);