<?php

function add(int $left, int $right) {
	return $left + $right;
}
 
try {
    echo add("left", "right");
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
} catch (Error $e) { 
    echo "Error: " . $e->getMessage();
}