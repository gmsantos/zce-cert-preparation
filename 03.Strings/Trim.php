<?php

/**
 * Is Trim combined with empty will result in an error?
 * 
 * Yes and No! Before php5.4 empty gives "Can't use function return value in write context" error
 * 
 * Explanation: http://stackoverflow.com/questions/1075534/cant-use-method-return-value-in-write-context/4328049#4328049
 */

$data = '   Tenho Espaços a mais   ';

$var = empty(trim($data));

var_dump($var);