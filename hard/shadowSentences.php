<?php
/*Shadow Sentences
Given two sentences, return whether they are shadows of each other. This means that all of the word lengths are the same, but the corresponding words don't share any common letters.

Examples
shadowSentence("they are round", "fold two times") ➞ true

shadowSentence("own a boat", "buy my wine") ➞ false
// No words share common letters, but "a" and "my" have different lengths.

shadowSentence("his friends", "our company") ➞ false
// Word lengths are the same but "friends" and "company" share the letter "n".

shadowSentence("salmonella supper", "birthright") ➞ false
// Setences with different numbers of words.
Notes
All sentences will be given in lowercase, and will have no punctuation.
Return false if the sentences have different numbers of words.*/

function shadowSentence($a, $b) {
	$aWords = explode(" ", $a);
	$bWords = explode(" ", $b);
	$wordsCount = count($aWords);
	if ($wordsCount != count($bWords)) {
	  return false;
	}
	for ($i = 0; $i < $wordsCount; $i++) {
	  if (strlen($aWords[$i]) != strlen($bWords[$i])) {
	    return false;
	  }
	}
	for ($i = 0; $i < $wordsCount; $i++) {
	  $aLetters = str_split($aWords[$i]);
	  $bLetters = str_split($bWords[$i]);
	  $letterCount = count($aLetters);
	  for($j = 0; $j < $letterCount; $j++) {
	    if (in_array($aLetters[$j], $bLetters)){
	      return false;
	    }
	  }
	}
	return true;
}

echo shadowSentence('they are round', 'fold two times') === true;
echo shadowSentence('impossible poetry', 'gargantuan cliffs') === true;
echo shadowSentence('seemingly unlimited', 'cutthroat crossbows') === true;
echo shadowSentence('empty cookie jar', 'adorn fluffy wig') === true;
echo shadowSentence('own a boat', 'buy my wine') === false;
echo shadowSentence('his friends', 'our company') === false;
echo shadowSentence('a normal sentence', 'a normal sentence') === false;
echo shadowSentence('salmonella supper', 'birthright') === false;