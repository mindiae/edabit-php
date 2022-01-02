<?php
/*
Secret Function 3.0
Create a function based on the input and output. Look at the examples, there is a pattern.

Examples
secret("div>p.a$$*2") ➞ `<div><p class="a01"></p><p class="a02"></p></div>`
// Only whitespace in the entire string ===  One whitespace before each class. Total " " === 2

secret("ul>li.b$*3") ➞ `<ul><li class="b1"></li><li class="b2"></li><li class="b3"></li></ul>`
// Only whitespace in the entire string === One whitespace before each class. Total " " === 3

secret("p>h1.c$$$*2") ➞ `<p><h1 class="c001"></h1><h1 class="c002"></h1></p>`
// Only whitespace in the entire string === One whitespace before each class. Total " " === 2
Notes
Input is a string.
*/
function secret($text) {
	$result = "";
	preg_match(
	  "/(.+)>(.+)\.([^\$]+)([\$]+)\*(\d+)/",
	  $text, $matches);
	$result .= "<" . $matches[1] . ">";
	for ($i = 1; $i <= $matches[5]; $i++) {
	  $result .= "<" . $matches[2] . ' class="';
	  $result .= $matches[3];
	  $result .= str_pad(
	    $i,
	    strlen($matches[4]),'0',STR_PAD_LEFT);
	  $result .= '"></' . $matches[2] . '>';
	}
	$result .= '</' . $matches[1] . '>';
	return $result;
}

echo secret("ul>li.item$$$*5") === '<ul><li class="item001"></li><li class="item002"></li><li class="item003"></li><li class="item004"></li><li class="item005"></li></ul>';
echo secret("div>p.menu$*2") === '<div><p class="menu1"></p><p class="menu2"></p></div>';
echo secret("div>p.menu$$*2") === '<div><p class="menu01"></p><p class="menu02"></p></div>';
echo secret("div>p.header$$*3") === '<div><p class="header01"></p><p class="header02"></p><p class="header03"></p></div>';
echo secret("ul>li.nav$$$$*3") === '<ul><li class="nav0001"></li><li class="nav0002"></li><li class="nav0003"></li></ul>';
echo secret("p>h1.c$$$*2") === '<p><h1 class="c001"></h1><h1 class="c002"></h1></p>';
echo secret("div>p.a$$*2") === '<div><p class="a01"></p><p class="a02"></p></div>';
echo secret("ul>li.b$*3") === '<ul><li class="b1"></li><li class="b2"></li><li class="b3"></li></ul>';