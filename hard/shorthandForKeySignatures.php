<?php
/*Shorthand for Key Signatures
Given a string containing a key signature written in shorthand, create a function which replaces the shorthand with its full written name.

A lowercase letter denotes a minor key.
An uppercase letter denotes a major key.
See the examples below for a more helpful guide!

Examples
fullKeyName("Prelude in C") ➞ "Prelude in C major"

fullKeyName("Fugue in c") ➞ "Fugue in C minor"

fullKeyName("Toccata and Fugue in d") ➞ "Toccata and Fugue in D minor"

fullKeyName("Sonata in eb") ➞ "Sonata in Eb minor"
Notes
Write the letter name in uppercase (ignore b and #).
Write "major" or "minor" in all lowercase (rather than "Major" or "Minor").
Hint
The first letter of the term should always be capital, even if it's "b".*/
function fullKeyName($str) {
 	$pattern = '/^(.+? in )(\w)(.?)$/';
 	$result = preg_replace_callback($pattern,
 	  function ($matches) {
 	    $letter = strtoupper($matches[2]);
 	    if ($matches[2] === $letter ) {
 	      return $matches[1] . $letter . $matches[3] . ' major';
 	    }
 	    return $matches[1] . $letter . $matches[3] . ' minor';
 	  }, $str);
 	return $result;
}

echo fullKeyName("Prelude in C") === "Prelude in C major";
echo fullKeyName("Fugue in c") === "Fugue in C minor";
echo fullKeyName("Toccata and Fugue in d") === "Toccata and Fugue in D minor";
echo fullKeyName("a Fugue in c") === "a Fugue in C minor";
echo fullKeyName("Sonata in D") === "Sonata in D major";
echo fullKeyName("Opera in eb") === "Opera in Eb minor";
echo fullKeyName("Toccata in ab") === "Toccata in Ab minor";
echo fullKeyName("Toccata in f") === "Toccata in F minor";
echo fullKeyName("Symphony in C#") === "Symphony in C# major";
echo fullKeyName("Mass in c") === "Mass in C minor";
echo fullKeyName("Toccata in c") === "Toccata in C minor";
echo fullKeyName("Prelude in Ab") === "Prelude in Ab major";
echo fullKeyName("Concerto in f#") === "Concerto in F# minor";
echo fullKeyName("Symphony in eb") === "Symphony in Eb minor";
echo fullKeyName("Sonata in a") === "Sonata in A minor";
echo fullKeyName("Sonata in e") === "Sonata in E minor";
echo fullKeyName("Concerto in c#") === "Concerto in C# minor";
echo fullKeyName("Opera in f") === "Opera in F minor";
echo fullKeyName("Mass in c") === "Mass in C minor";
echo fullKeyName("Symphony in D") === "Symphony in D major";
echo fullKeyName("Fugue in d") === "Fugue in D minor";
echo fullKeyName("Fugue in eb") === "Fugue in Eb minor";
echo fullKeyName("Fugue in F") === "Fugue in F major";
echo fullKeyName("Mass in c#") === "Mass in C# minor";
echo fullKeyName("Requiem in C") === "Requiem in C major";
echo fullKeyName("Prelude in Eb") === "Prelude in Eb major";
echo fullKeyName("Prelude in Bb") === "Prelude in Bb major";
echo fullKeyName("Fugue in g") === "Fugue in G minor";
echo fullKeyName("Requiem in c#") === "Requiem in C# minor";
echo fullKeyName("Opera in f") === "Opera in F minor";
echo fullKeyName("Prelude in G") === "Prelude in G major";
echo fullKeyName("Symphony in Eb") === "Symphony in Eb major";
echo fullKeyName("Symphony in eb") === "Symphony in Eb minor";
echo fullKeyName("Sonata in e") === "Sonata in E minor";
echo fullKeyName("Fugue in g") === "Fugue in G minor";
echo fullKeyName("Sonata in A") === "Sonata in A major";
echo fullKeyName("Requiem in b") === "Requiem in B minor";
echo fullKeyName("Sonata in eb") === "Sonata in Eb minor";
echo fullKeyName("Prelude in c#") === "Prelude in C# minor";
echo fullKeyName("Fugue in F") === "Fugue in F major";
echo fullKeyName("Concerto in ab") === "Concerto in Ab minor";
echo fullKeyName("Toccata in F#") === "Toccata in F# major";
echo fullKeyName("Symphony in Bb") === "Symphony in Bb major";
echo fullKeyName("Waltz in f#") === "Waltz in F# minor";
echo fullKeyName("Prelude in Eb") === "Prelude in Eb major";
echo fullKeyName("Requiem in b") === "Requiem in B minor";
echo fullKeyName("Concerto in Bb") === "Concerto in Bb major";
echo fullKeyName("Fugue in G") === "Fugue in G major";
echo fullKeyName("Mass in eb") === "Mass in Eb minor";
echo fullKeyName("Symphony in Ab") === "Symphony in Ab major";
echo fullKeyName("Symphony in f") === "Symphony in F minor";
echo fullKeyName("Fugue in f#") === "Fugue in F# minor";
echo fullKeyName("Prelude in D") === "Prelude in D major";
echo fullKeyName("Concerto in bb") === "Concerto in Bb minor";