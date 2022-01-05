<?php
/*
String Compression from Character Array
The function is given an array of characters. Compress the array into a string using the following rules. For each group of consecutively repeating characters:

If the number of repeating characters is one, append the string with only this character.
If the number n of repeating characters x is greater than one, append the string with "x" + n.
Examples
compress(["t", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "s", "s", "s", "h"]) ➞ "te14s3h"

compress(["a", "a", "b", "b", "c", "c", "c"]) ➞ "a2b2c3"

compress(["a"]) ➞ "a"

compress(["a", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b"]) ➞ "ab12"

compress(["a", "a", "a", "b", "b", "a", "a"]) ➞ "a3b2a2"
Notes
N/A
*/
function compress($arr) {
  $repeatedChars = preg_split(
    '/(.)(?!\1|$)\K/',
    join('', $arr)
  );
  return join('', array_map(
    function($var) {
      return (strlen($var) == 1)
        ?$var
        :$var[0] . strlen($var);
    },
    $repeatedChars
  ));
}

// Author: Evgeny SH


echo compress(["a", "a", "b", "b", "c", "c", "c"]) === "a2b2c3";
echo compress(["a"]) === "a";
echo compress(["a", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b"]) === "ab12";
echo compress(["a", "a", "a", "b", "b", "a", "a"]) === "a3b2a2";
echo compress(["t", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "s", "s", "s", "h"]) === "te14s3h";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"]) === "a43";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbb"]) === "a43b5";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbb", "cccccccccccccccccccccccccccccccccccccc"]) === "a43b5c38";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbb", "cccccccccccccccccccccccccccccccccccccc", "dddddddddddddddddddd"]) === "a43b5c38d20";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbb", "cccccccccccccccccccccccccccccccccccccc", "dddddddddddddddddddd", "eeeeeeeeee"]) === "a43b5c38d20e10";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbb", "cccccccccccccccccccccccccccccccccccccc", "dddddddddddddddddddd", "eeeeeeeeee", "ffffffffffffffffff"]) === "a43b5c38d20e10f18";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"]) === "a36";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb"]) === "a36b31";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "ccccccccccccc"]) === "a36b31c13";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "ccccccccccccc", "ddddddddddddddddddddddddddd"]) === "a36b31c13d27";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "ccccccccccccc", "ddddddddddddddddddddddddddd", "eeeeeee"]) === "a36b31c13d27e7";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "ccccccccccccc", "ddddddddddddddddddddddddddd", "eeeeeee", "fffffffffffffff"]) === "a36b31c13d27e7f15";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "ccccccccccccc", "ddddddddddddddddddddddddddd", "eeeeeee", "fffffffffffffff", "gggggggggggggggggggggggggggggggggggggggg"]) === "a36b31c13d27e7f15g40";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "ccccccccccccc", "ddddddddddddddddddddddddddd", "eeeeeee", "fffffffffffffff", "gggggggggggggggggggggggggggggggggggggggg", "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh"]) === "a36b31c13d27e7f15g40h47";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"]) === "a42";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb"]) === "a42b43";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "cccccccccccccccccccccccccccccccccccccc"]) === "a42b43c38";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaa"]) === "a23";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbb"]) === "a23b21";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbb", "cccccccccccccccccccccccccccccccccccccc"]) === "a23b21c38";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbb", "cccccccccccccccccccccccccccccccccccccc", "dddddddddddddddddddddddddddddddddddd"]) === "a23b21c38d36";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbb", "cccccccccccccccccccccccccccccccccccccc", "dddddddddddddddddddddddddddddddddddd", "eeeeeeeeeeeeeeeeeeeeeeeeeeeeee"]) === "a23b21c38d36e30";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbb", "cccccccccccccccccccccccccccccccccccccc", "dddddddddddddddddddddddddddddddddddd", "eeeeeeeeeeeeeeeeeeeeeeeeeeeeee", "fffffffffffffffffffff"]) === "a23b21c38d36e30f21";
echo compress(["aaaaaaa"]) === "a7";
echo compress(["aaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb"]) === "a7b30";
echo compress(["aaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "cccccccccc"]) === "a7b30c10";
echo compress(["aaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "cccccccccc", "ddddddd"]) === "a7b30c10d7";
echo compress(["aaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "cccccccccc", "ddddddd", "eeeeeeeee"]) === "a7b30c10d7e9";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"]) === "a38";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbb"]) === "a38b12";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbb", "cccccccccccccccccccc"]) === "a38b12c20";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbb", "cccccccccccccccccccc", "dddddddddddddddddddddddddddddddddddddd"]) === "a38b12c20d38";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaa"]) === "a24";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb"]) === "a24b47";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb", "ccccccc"]) === "a24b47c7";
echo compress(["aaaaa"]) === "a5";
echo compress(["aaaaa", "bbbbbb"]) === "a5b6";
echo compress(["aaaaa", "bbbbbb", "cccccccccccccccccccccccccccccc"]) === "a5b6c30";
echo compress(["aaaaa", "bbbbbb", "cccccccccccccccccccccccccccccc", "dd"]) === "a5b6c30d2";
echo compress(["aaaaa", "bbbbbb", "cccccccccccccccccccccccccccccc", "dd", "ee"]) === "a5b6c30d2e2";
echo compress(["aaaaa", "bbbbbb", "cccccccccccccccccccccccccccccc", "dd", "ee", "fffffffffffffffffffffffffffffffffffffffffffffff"]) === "a5b6c30d2e2f47";
echo compress(["aaaaaaaaaaaaaaaaaaaa"]) === "a20";
echo compress(["aaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbb"]) === "a20b17";
echo compress(["aaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbb", "ccccccccccccccc"]) === "a20b17c15";
echo compress(["aaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbb", "ccccccccccccccc", "ddddddddddddddd"]) === "a20b17c15d15";
echo compress(["aaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbb", "ccccccccccccccc", "ddddddddddddddd", "eeeeeeeeeeeeeeeeeeeeeeee"]) === "a20b17c15d15e24";
echo compress(["aaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbb", "ccccccccccccccc", "ddddddddddddddd", "eeeeeeeeeeeeeeeeeeeeeeee", "fffffffffffffffffffffffffffffffffff"]) === "a20b17c15d15e24f35";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"]) === "a37";
echo compress(["aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb"]) === "a37b47";