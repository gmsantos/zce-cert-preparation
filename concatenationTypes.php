<?php

function echoLine($str){
	echo $str . PHP_EOL;
}

/**
 * PHP tries to convert everything to number.
 * 'hello' . 1 implies on 'hello1', with is treated like 0
 * 
 * 0 + 2 = 2 concat 34 ... resulting in 234
 * 
 * More info about this sourcery:
 * http://stackoverflow.com/a/16294882/2099835
 * http://php.net/manual/pt_BR/language.operators.string.php#41950
 */


echoLine('hello' . 1 + 2 . '34');
echoLine('hello' . 1 + 2 . 'hello');
echoLine('hello' . (1 + 2) . '34');
echoLine(1 + 2 . '34');
echoLine('34' . 1 + 2);