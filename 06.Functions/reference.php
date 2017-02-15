<?php

function add_some_extra(callable &$string)
{
    $string .= 'and something extra.';
}

$str = 'This is a string, ';

add_some_extra($str);

echo $str;    // outputs 'This is a string, and something extra.'

$a = 0;

$umaVariavelMuitoGrande = 123;
$a = &$umaVariavelMuitoGrande;

$a = 23;

var_dump($umaVariavelMuitoGrande);
