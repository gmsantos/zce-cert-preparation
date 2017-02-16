<?php

/**
 * ob stands for Output Buffer
 */

ob_start();
echo "PHP";

$ob1 = ob_get_contents();

echo 5;

$ob2 = ob_get_clean(); // Get and clean buffer

// Notice - No buffer to output
ob_flush(); // This echo the buffer

// Reverse string
echo strrev($ob1 . $ob2);