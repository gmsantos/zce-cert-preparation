<?php namespace Foobar;

class MyNamespacedClass {

	static public function test()
	{
		echo "Hello world!\n";
	}

}

call_user_func(__NAMESPACE__ . '\MyNamespacedClass::test'); // A partir do PHP 5.3.0
// Hello world!
call_user_func(array(__NAMESPACE__ . '\MyNamespacedClass', 'test')); // A partir do PHP 5.3.0
// Hello world!

