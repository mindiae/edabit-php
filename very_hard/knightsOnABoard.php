<?php
/*
Knights on a Board
Write a function that returns true if the knights are placed on a chessboard such that no knight can capture another knight. Here, 0s represent empty squares and 1s represent knights.

Examples
cannotCapture([
  [0, 0, 0, 1, 0, 0, 0, 0],
  [0, 0, 0, 0, 0, 0, 0, 0],
  [0, 1, 0, 0, 0, 1, 0, 0],
  [0, 0, 0, 0, 1, 0, 1, 0],
  [0, 1, 0, 0, 0, 1, 0, 0],
  [0, 0, 0, 0, 0, 0, 0, 0],
  [0, 1, 0, 0, 0, 0, 0, 1],
  [0, 0, 0, 0, 1, 0, 0, 0]
]) ➞ true

cannotCapture([
  [1, 0, 1, 0, 1, 0, 1, 0],
  [0, 1, 0, 1, 0, 1, 0, 1],
  [0, 0, 0, 0, 1, 0, 1, 0],
  [0, 0, 1, 0, 0, 1, 0, 1],
  [1, 0, 0, 0, 1, 0, 1, 0],
  [0, 0, 0, 0, 0, 1, 0, 1],
  [1, 0, 0, 0, 1, 0, 1, 0],
  [0, 0, 0, 1, 0, 1, 0, 1]
]) ➞ false
Notes
Knights can be present in any of the 64 squares.
No other pieces except knights exist.
*/
function cannotCapture($board) {
	for ($i = 0; $i < 8; $i++) {
	  for ($j = 0; $j < 8; $j++) {
	    if ($board[$i][$j]) {
	      //north
	      if (($i - 2) >= 0) {
	        // back
	        if (($j - 1) >= 0) {
	          if ($board[$i - 2][$j - 1]) {
	            return FALSE;
	          }
	        }
	        // forward
	        if (($j + 1) < 8) {
	          if ($board[$i - 2][$j + 1]) {
	            return FALSE;
	          }
	        }
	      }
	      // east
	      if (($j + 2) < 8) {
	        // up
	        if (($i - 1) >= 0) {
	          if ($board[$i - 1][$j + 2]) {
	            return FALSE;
	          }
	        }
	        // down
	        if (($i + 1) < 8) {
	          if ($board[$i + 1][$j + 2]) {
	            return FALSE;
	          }
	        }
	      }
	      // south
	      if (($i + 2) < 8) {
	        // back
	        if (($j - 1) >= 0) {
	          if ($board[$i + 2][$j - 1]) {
	            return FALSE;
	          }
	        }
	        // forward
	        if (($j + 1) < 8) {
	          if ($board[$i + 2][$j + 1]) {
	            return FALSE;
	          }
	        }
	      }
	      // west
	      if (($j - 2) >= 0) {
	        // up
	        if (($i - 1) >= 0) {
	          if ($board[$i - 1][$j - 2]) {
	            return FALSE;
	          }
	        }
	        // down
	        if (($i + 1) < 8) {
	          if ($board[$i + 1][$j - 2]) {
	            return FALSE;
	          }
	        }
	      }
	    }
	  }
	}
	return TRUE;
}

echo TRUE === cannotCapture([
      [0, 0, 0, 1, 0, 0, 0, 0],
      [0, 0, 0, 0, 0, 0, 0, 0],
      [0, 1, 0, 0, 0, 1, 0, 0],
      [0, 0, 0, 0, 1, 0, 1, 0],
      [0, 1, 0, 0, 0, 1, 0, 0],
      [0, 0, 0, 0, 0, 0, 0, 0],
      [0, 1, 0, 0, 0, 0, 0, 1],
      [0, 0, 0, 0, 1, 0, 0, 0]
    ]);
echo TRUE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [0, 0, 1, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1],
      [0, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 1, 0, 1],
      [0, 0, 0, 0, 0, 0, 1, 0],
      [0, 0, 0, 0, 0, 0, 0, 1]
    ]);
echo TRUE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [1, 0, 0, 0, 0, 1, 0, 1],
      [1, 0, 0, 0, 0, 0, 1, 0],
      [1, 0, 0, 0, 0, 0, 0, 1]
    ]);
echo TRUE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1]
    ]);
echo TRUE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 1, 0, 1],
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 0, 0, 1]
    ]);
echo FALSE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 1, 0, 1],
      [1, 0, 1, 0, 1, 0, 1, 0],
      [1, 0, 0, 1, 0, 0, 0, 1]
    ]);
echo FALSE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [1, 0, 1, 0, 1, 1, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 1, 0, 1],
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 0, 0, 1]
    ]);
echo FALSE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [0, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 1, 0, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1]
    ]);
echo FALSE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [0, 0, 0, 0, 1, 1, 1, 0],
      [0, 0, 0, 0, 0, 0, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 1, 0, 1, 0, 1]
    ]);
echo FALSE === cannotCapture([
      [1, 0, 1, 0, 1, 0, 1, 0],
      [0, 1, 0, 1, 0, 1, 0, 1],
      [0, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 0, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 0, 0, 0, 1, 0, 1],
      [1, 0, 0, 0, 1, 0, 1, 0],
      [0, 0, 1, 1, 0, 1, 0, 1]
    ]);
echo FALSE === cannotCapture([
      [0, 0, 0, 1, 0, 0, 0, 0],
      [0, 0, 0, 0, 0, 0, 0, 0],
      [0, 1, 0, 0, 0, 1, 1, 0],
      [0, 0, 0, 0, 1, 0, 1, 0],
      [0, 1, 0, 0, 0, 1, 0, 0],
      [0, 0, 0, 0, 0, 0, 0, 0],
      [0, 1, 0, 0, 0, 0, 0, 1],
      [0, 0, 0, 0, 1, 0, 0, 0]
    ]);