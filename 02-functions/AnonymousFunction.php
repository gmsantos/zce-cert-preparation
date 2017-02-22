<?php 

// http://php.net/manual/en/language.types.callable.php


class A {
    public function cl(){
       return function ($a) { return $a * 2; };
    }
}

$teste = new A;
$retorno = $teste->cl(1); // function ()


echo $retorno(2); // 4

$teste->cl = function ($a) { return $a * 5; };


$retorno = ($teste->cl)(1); // function ()

echo $retorno;
