<?php 

// Annonymous Funtion
$somar = function ($a, $b) {
    return $a + $b;
};

echo $somar(4, 2);

$numeros = [
    [1, 3],
    [2, 3],
    [3, 4],
];

$batata = 'teste';

$retorno = array_map(function ($value) use ($numeros, $batata) {
    var_dump($batata);
    return array_sum($value);
}, $numeros);

var_dump($retorno);

// http://php.net/manual/en/language.types.callable.php
