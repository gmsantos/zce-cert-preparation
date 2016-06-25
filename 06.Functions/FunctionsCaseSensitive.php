<?php

function aCommonFunction ($number = 1){
	return $number * 10;
}

class my_class{
	function aCoMmOnFuNcTiOn ($number = 1){
		return ACOMMONFUNCTION($number);
	}
}

/*
 * Character case on functions and classnames doesn't matter for PHP
 * It's just estetical
 */

echo aCommonFunction( ACOMMONFUNCTION( aCoMmOnFuNcTiOn( (new MY_class)->acommonfunction() ) ) ) . PHP_EOL;

/*
 * ...but it matters for variables names:
 */

$myVar = 1000;
$myvar = '100';
$MYVAR = 1;

var_dump($myVar);
var_dump($myvar);
var_dump($MYVAR);
