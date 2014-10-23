<?php

$a = 'myVar';

//echo (int) $a;

switch ($a) {
	case 0:										// Type convertion string to inte, so myVar = 0
		echo 'case 0';
		// No breaking to stop... echo all :)
	case 'myVar':								// Reevaluate with string
		echo 'case myVar';
	default:
		echo 'casenothing';
}