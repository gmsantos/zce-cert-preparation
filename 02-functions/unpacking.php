<?php

function soma($a, $b, ...$vars) {
    var_dump($vars);
    return array_sum($vars);    
}

var_dump(soma(1,2));

var_dump(soma(1,2,3,4,5));

function add($a, $b, $c = PHP_EOL) {

    var_dump(func_get_args());

    return $a + $b + $c;
}

$operators = [2, 3, 4];

echo add(1, ...$operators);
