<?php
/*Remove The Word!
Create a function that takes an array and string. The function should remove the letters in the string from the array, and return the array.

Examples
removeLetters(["s", "t", "r", "i", "n", "g", "w"], "string") ➞ ["w"]

removeLetters(["b", "b", "l", "l", "g", "n", "o", "a", "w"], "balloon") ➞ ["b", "g", "w"]

removeLetters(["d", "b", "t", "e", "a", "i"], "edabit") ➞ []
Notes
If number of times a letter appears in the array is greater than the number of times the letter appears in the string, the extra letters should be left behind (see example #2).
If all the letters in the array are used in the string, the function should return an empty array (see example #3).*/

function removeLetters($letters, $word)
{
 	$wordLetters = str_split($word);
 	return array_values(array_filter($letters, 
 	  function($var) use(&$wordLetters)
 	  {
 	    $found = false;
 	    for ($i=0;$i<count($wordLetters);$i++)
 	    {
 	      if ($var == $wordLetters[$i])
 	      {
 	        $found = true;
 	        \array_splice($wordLetters, $i, 1);
 	        break;
 	      }
 	    }
 	    if (!$found) return true;
 	  }));
}

echo removeLetters(["s", "t", "r", "i", "n", "g", "w"], "string") === ["w"];
echo removeLetters(["b", "b", "l", "l", "g", "n", "o", "a", "w"], "balloon") === ["b", "g", "w"];
echo removeLetters(["d", "b", "t", "e", "a", "i"], "edabit") === [];
echo removeLetters(["t", "t", "e", "s", "t", "u"], "testing") === ["t", "u"];
