<?php
/*
Majority Vote
Create a function that returns the majority vote in an array. A majority vote is an element that occurs > N/2 times in an array (where N is the length of the array).

Examples
majorityVote(["A", "A", "B"]) ➞ "A"

majorityVote(["A", "A", "A", "B", "C", "A"]) ➞ "A"

majorityVote(["A", "B", "B", "A", "C", "C"]) ➞ NULL
Notes
The frequency of the majority element must be strictly greater than 1/2.
If there is no majority element, return NULL.
If the array is empty, return NULL.
*/
function majorityVote($arr) {
	if ($arr === []) return NULL;
	$valuesCount = array_count_values($arr);
	arsort($valuesCount);
	$value = reset($valuesCount);
	$key = key($valuesCount);
	return ($value > count($arr) / 2)?$key:NULL;
}

echo majorityVote(["A", "B", "B", "B", "A", "A"]) === NULL;
echo majorityVote(["B", "B", "B"]) === "B";
echo majorityVote(["A", "B", "B"]) === "B";
echo majorityVote(["A", "A", "B"]) === "A";
echo majorityVote(["A", "A", "A", "B", "C", "A"]) === "A";
echo majorityVote(["B", "A", "B", "B", "C", "A", "B", "B"]) === "B";
echo majorityVote(["A", "B", "B", "A", "C", "C"]) === NULL;
echo majorityVote(["A", "B"]) === NULL;
echo majorityVote(["A"]) === "A";
echo majorityVote([]) === NULL;