<?php

$nome = 'Gabriel';

$string = 'Bem vindo $nome';

echo $string; // Bem vindo $nome
echo PHP_EOL;

$string2 = "Bem \t vindo \n $nome";

echo $string2; // Bem vindo Gabriel
echo PHP_EOL;
echo PHP_EOL;


echo strlen('\t\n');
echo PHP_EOL;

$nomezinho = "Batata";

$string3 = "Diminutivo do nome {$nome}zinho";
echo $string3;
echo PHP_EOL;

$nomes = ['instrutor' => 'Gabriel', 'Tiago', 'Thales' ];

echo "Bem vindo {$nomes['instrutor']}";


