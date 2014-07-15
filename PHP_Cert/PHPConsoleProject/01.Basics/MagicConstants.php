<?php

namespace MagicConstants {

    // Surrounded by double underscores: __XXXX__

    echo __DIR__ . PHP_EOL;       // output directory path
    echo __FILE__ . PHP_EOL;      // output directory path with filename

    echo __NAMESPACE__ . PHP_EOL; // output file line number
    echo __LINE__ . PHP_EOL;      // output file line number

    class MyClass 
    {
        public function __construct( )
        {
            echo __CLASS__ . PHP_EOL; 
        }
        
        public function myMethod( )
        {
            echo __METHOD__ . PHP_EOL;
        }
    }

    function myFunction( )
    {
        echo __FUNCTION__ . PHP_EOL;
    }

    $myClass = new MyClass();    // output Classname
    $myClass->myMethod();        // output Method
    myFunction();                // output Function

}

namespace { // Global
    var_dump(__NAMESPACE__);     // output empty on Global
}