<?php

// to use variable variables we 
// evaluate a variable value and use it
// as a variable


$variavel = 'teste 123';
$teste = 'variavel';

//echo $$teste; // $teste == variavel ${$teste} => $variavel.. output = teste 123 

// from http://php.net/manual/pt_BR/language.variables.variable.php

//You can even add more Dollar Signs

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

$a; //Returns Hello
$$a; //Returns World
$$$a; //Returns Foo
$$$$a; //Returns Bar
$$$$$a; //Returns a

$$$$$$a; //Returns Hello
$$$$$$$a; //Returns World
