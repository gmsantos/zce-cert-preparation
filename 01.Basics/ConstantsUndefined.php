<?php

// PHP tries to convert undefined constants to strings
define('MINHA_CONSTANTE', 'teste123');
define('minha_constante', 'teste12123');

echo MINHA_CONSTANTE;

$pdo1 = new pdo;
$pdo2 = new PDO;
