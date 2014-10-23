<?php

$pattern = "/(\w*)([0-9]{1})\s/"; // A pattern always have a delimitator, usually '/' or '#'

$string = "PHP5 released PHP6 not_released";

// Return number of matches
$numberOfMatches = preg_match_all($pattern, $string, $matches); // Third parameter is a reference to matches

var_dump($matches);

/*

array(2) {
  [0]=>							Whole match
  array(2) {
    [0]=>
    string(5) "PHP5 "
    [1]=>
    string(5) "PHP6 "
  }
  [1]=>							Groups ()
  array(2) {
    [0]=>
    string(3) "PHP"
    [1]=>
    string(3) "PHP"
  } 
  [2]=>				
  array(2) {
    [0]=>
    string(1) "5"
    [1]=>
    string(1) "6"
  }
}

*/