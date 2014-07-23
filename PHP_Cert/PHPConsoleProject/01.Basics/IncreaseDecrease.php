<?php

$a = 5;
$b = 5;

if ($a++ > 5)      // Increase variable after comparsion
    echo "true";
else
    echo "false";  // output false

echo PHP_EOL;

if (++$b > 5)      // Increase variable before comparsion
    echo "true";   // output true
else
    echo "false";