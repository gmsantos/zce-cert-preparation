<?php



//	The casting operators allow you to cast variables to new types. Unlike the settype function, 
//	they return a value that is the value of the variable cast in the new type.
//	It is used simply as the data type you want to convert to enclosed in brackets and placed before an expression.
//
//	The casting operators are:
//
//	(int) or (integer) to cast to an integer
//	(float) or (real) to cast to a floating-point number
//	(string) to cast to a string
//	(bool) or (boolean) to cast to a boolean
//	(array) to cast to an array
//	(object) to cast to an object


$a = array('c', 'b', 'a');
$b = (array) $a;
