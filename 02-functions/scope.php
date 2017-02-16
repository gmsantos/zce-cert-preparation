<?php

function sub($a, $b) {
    global $c;

    $c = $a - $b;
    return $c;
}

$a = 10;
$b = 3;
$c = 20;

echo sub($a, $b) . PHP_EOL;

$b = 5;

echo sub($a, $b) . PHP_EOL;

echo $c  . PHP_EOL;
