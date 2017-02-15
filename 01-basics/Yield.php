<?php

// see: http://php.net/manual/pt_BR/language.generators.syntax.php
// http://php.net/manual/pt_BR/language.generators.overview.php

function loop()
{
    foreach (range(1, 100) as $key => $value) {
        yield $key => $value * 2;
    }
}

function loopKeys()
{
    foreach (range(1, 100) as $key => $value) {
        yield $key => $value * 2;
    }
}

$it = loopCrazy();

echo $it->current() . "\n";

$it->next();
$it->next();
$it->next();

$it->next();

echo $it->current() . "\n";


$it->next();

echo $it->current() . "\n";

foreach(loopKeys() as $key => $value){
    echo $key . ': ' . $value . "\n";
}

