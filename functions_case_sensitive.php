<?php

function aCommonFunction ($number = 1){
	return $number * 10;
}

/*
 * Characters case on functions doesn't matter
 * It's just for estetical purposes, since PHP is Case Incensitive
 */

echo aCommonFunction( ACOMMONFUNCTION( aCoMmOnFuNcTiOn() ) );

/*
 * But it matters for variables:
 */

$myVar = 1000;
$myvar = 100;
$MYVAR = 1;

// Notice: Undefined variable
echo aCommonFunction( ACOMMONFUNCTION( aCoMmOnFuNcTiOn($MyVaR) ) );