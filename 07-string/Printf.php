<?php

// printf  - "f" from formated
// sprintf - return formated "s"tring
// vprintf - output from array "v"alues
// sscanf  - Oposit of sprintf
// fscanf  - Scan from a File

/**
 * Arguments:
 * 
 * %b - Binary number
 * %d - Decimal
 * %f - Float
 * %o - Octal
 * %e - Scientific Notation
 * %s - String    
 */

printf('%s - %f', 'Soma', 4);

echo sprintf('%s - %f', 'Soma', 4);
echo vprintf('%s - %f', ['Soma', 4]);

var_dump(sscanf('teste - 1.0000', '%s - %f'));

echo sprintf('%1$s - %2$f %2$e %2$o', 'Soma', 4);
