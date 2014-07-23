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


$octalNumber  = 076543210; // Octal starts with '0', contains 0-7
$hexaNumber   = 0xFD98210; // Hexadecimal starts with '0x', contains A-F,0-9

// Var is converted at runtime
var_dump($octalNumber);
var_dump($hexaNumber);
