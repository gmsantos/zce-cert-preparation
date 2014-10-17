<?php

 namespace {

	// An example callback function
	function my_callback_function()
	{
		echo "hello world from function!\n";
	}

	// An example callback method
	class MyClass {

		static function myCallbackMethod()
		{
			echo "Hello World From Class!";
		}

	}

	// Type 1: Simple callback
	call_user_func('my_callback_function');

	// Type 2: Static class method call
	call_user_func(array('MyClass', 'myCallbackMethod'));

	// Type 3: Object method call
	$obj = new MyClass();
	call_user_func(array($obj, 'myCallbackMethod'));

	// Type 4: Static class method call (As of PHP 5.2.3)
	call_user_func('MyClass::myCallbackMethod');

	// Type 5: Relative static class method call (As of PHP 5.3.0)
	class A {

		public static function who()
		{
			echo "Hello from relative A\n";
		}

	}

	class B extends A {

		public static function who()
		{
			echo "B\n";
		}

	}

	call_user_func(array('B', 'parent::who'));
	
	//Test variable variable callable
	
	$myClosure = function (){
		echo "Hello from Closure!\n";
	};
	
	$method = 'myClosure';
	
	call_user_func($$method);
	
}
namespace Foobar {

	class MyNamespacedClass {

		static public function test()
		{
			echo "(Foobar) Hello world!\n";
		}

	}

	call_user_func(__NAMESPACE__ . '\MyNamespacedClass::test'); // A partir do PHP 5.3.0
	// Hello world!
	call_user_func(array(__NAMESPACE__ . '\MyNamespacedClass', 'test')); // A partir do PHP 5.3.0
	// Hello world!
}