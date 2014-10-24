<?php

/*
 * More info
 * http://php.net/manual/en/language.types.integer.php
 * http://php.net/manual/en/language.types.float.php
 * 
 * Octal Convertion
 * 
 * http://www.sitepoint.com/forums/showthread.php?692045-Understanding-Octal-numbers-in-php
 */

$binaryNumber = 0b11; // Starts with '0b', contains 0-1
$octalNumber  = 0765; // Octal starts with '0', contains 0-7
$hexaNumber   = 0xFD; // Hexadecimal starts with '0x', contains A-F,0-9

// Var is converted at runtime
var_dump($binaryNumber);	// 3
var_dump($octalNumber);		// 501
var_dump($hexaNumber);		// 253

/**
 * Out off range octal stops on invalid number
 */

echo "Shorting convertion:\n";

//$newBinaryNumber = 0b1013;	  // Parse Error
$newOctalNumber  = 048124;    // results in 4

var_dump($newOctalNumber);
