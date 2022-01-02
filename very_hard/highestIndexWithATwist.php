<?php
/*
Highest Index (With a Twist)
Given a name, return the letter with the highest index in alphabetical order, with its corresponding index, in the form of a string.

Examples
alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]


alphabetIndex("Flavio") ➞ "22v"

alphabetIndex("Andrey") ➞ "25y"

alphabetIndex()"Oscar") ➞ "19s"
Notes
If you're stuck, check the Resources tab.
*/
function alphabetIndex($str) {
	$letters = str_split(strtolower($str));
	$indexes = array_map(function($var) {
	  return ord($var);
	}, $letters);
	rsort($indexes);
	$highestIndex = strval($indexes[0]) - 96;
	$highIndexlLetter = chr($indexes[0]);
	return $highestIndex . $highIndexlLetter;
}
echo alphabetIndex("Oscar") === "19s";
echo alphabetIndex("Lucas") === "21u";
echo alphabetIndex("Marko") === "18r";
echo alphabetIndex("Esley") === "25y";
echo alphabetIndex("Rogei") === "18r";
echo alphabetIndex("Nicolas") === "19s";
echo alphabetIndex("Flavio") === "22v";
echo alphabetIndex("Andrey") === "25y";
echo alphabetIndex("Hello") === "15o";