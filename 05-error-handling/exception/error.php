<?php

function add(int $left, int $right) {
	return $left + $right;
}
 
try {
    echo add("left", "right");
} catch (Exception | Error $e) {
    echo "Error: " . $e->getMessage();
}