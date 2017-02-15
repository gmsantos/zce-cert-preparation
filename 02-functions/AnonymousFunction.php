<?php 
/*
$array = [5, 1, 3, 2, 4];


$ordenar = function (array $teste) : array {
    for($i = 0; $i < count($teste); $i++) {
        for($j = 0; $j < count($teste) - 1 ; $j++) {
            if ($teste[$i] <= $teste[$j]) {
                $swap = $teste[$i];
                $teste[$i] = $teste[$j];
                $teste[$j] = $swap;
            } 
        }
    }

    return $teste;
};

$ordenado1 = $ordenar($array);

var_dump($ordenado1);

usort($array, function($a, $b) {
  return $a <=> $b;
});

var_dump($array);
*/

// Annonymous Funtion
$base = 7;

$somar = function ($a, $b) use ($base) {
    return $base + $a + $b;
};

echo $somar(4, 2);

exit();

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
