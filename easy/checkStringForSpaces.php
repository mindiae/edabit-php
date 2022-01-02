<?php
/*Check String for Spaces
Create a function that returns true if a string contains any spaces.

Examples
hasSpaces("hello") ➞ false
hasSpaces("hello, world") ➞ true
hasSpaces(" ") ➞ true
hasSpaces("") ➞ false
hasSpaces(",./!@#") ➞ false
Notes
An empty string does not contain any spaces.
Try doing this without RegEx.

if (str_contains('How are you', 'are')) { 
    echo 'true';
}
*/

function hasSpaces($str) {
  return str_contains($str, ' ') ? true:false;
}

echo hasSpaces("Foo") === false;
echo hasSpaces("Foo bar") === true;
echo hasSpaces("Foo ") === true;
echo hasSpaces(" Foo") === true;
echo hasSpaces(" ") === true;
echo hasSpaces("") === false;
echo hasSpaces(",./;'[]-=") === false;