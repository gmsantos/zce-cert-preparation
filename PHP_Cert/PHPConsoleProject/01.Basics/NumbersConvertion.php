<?php

/*
 * More info on 
 * http://php.net/manual/en/language.types.integer.php
 * http://php.net/manual/en/language.types.float.php
 */


$octalNumber  = 076543210; // Octal starts with '0', contains 0-7
$hexaNumber   = 0xFD98210; // Hexa starts with '0x', contains A-F,0-9
$binaryNumber = 010101101; // Binary starts with 0, contrains only 0s and 1s

// Var is converted at runtime
var_dump($octalNumber);
var_dump($hexaNumber);
var_dump($binaryNumber);