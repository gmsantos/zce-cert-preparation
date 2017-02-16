<?php

/* Variable functions, PHP supports the concept of variable functions. */
$fruit = array('banana', 'apple');
$variableFunction = 'is_array';
var_dump($variableFunction($fruit));

/* But Variable functions won't work with language constructs such as echo(), print(), unset(), isset(), empty(), include(), require() and the like.*/
$variableFunction = 'isset';
var_dump($variableFunction($result));
