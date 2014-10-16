<?php

/**
 * CachingIterator - "Um olho no peixe e outro no gato", está sempre uma posição a frente em relação ao iterator.
 */

$arr = [
	'eu'    => 'tenho', 
	'sou'   => 'keys',
	'um'    => 'para',
	'array' => 'comparar',
	'assoc' => 'galera'
];

$iterator = new CachingIterator(new ArrayIterator($arr));

var_dump($iterator->current());                      // null
var_dump($iterator->getInnerIterator()->current());  // string(5) "tenho"

foreach($iterator as $key => $value){
	
	echo "Atual: $value - ";
	
	$proximoValue = $iterator->getInnerIterator()->current();
	echo "Proximo: $proximoValue \n";
	
}

