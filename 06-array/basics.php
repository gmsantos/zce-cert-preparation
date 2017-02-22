<?php

$arrayTeste = range('a','h');

shuffle($arrayTeste);

$a = 1;
$b = 1;
$c = 123;

compact('a', 'b', 'c');
