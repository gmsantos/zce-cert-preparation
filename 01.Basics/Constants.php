<?php

namespace { // Global Scope

    // Constants can be defined ...
    const CONSTANT = 'ABC ';

    // ... or ....
    define('CONSTANT_FUNCTION', 'DEF ');
    
    // You can define reserved word on constants ...
    define('EMPTY', 'reserved word');
    
    // ... but you shouldn't
    // echo EMPTY;                       // Parse Error
    echo constant('EMPTY') . PHP_EOL;    // Works
    
    /*
     * Acessing a class Constant
     */ 
    class MyClass {
        const CONSTANT_CLASS = 'GHI ';
        
        public function accessConstant( )
        {
            // Inside the class, use 'self'
            echo self::CONSTANT_CLASS;
        }
        
        public function wrongAccessConstant( )
        {
            // Without 'self' php displays a Notice and assume output as a string
            echo CONSTANT_CLASS;
        }
        
    }

    $myClass = new MyClass();
    $myClass->accessConstant();
    //$myClass->wrongAccessConstant();

    // ... You don't need to instantiate a class to use constants
    echo MyClass::CONSTANT_CLASS;

}

namespace MyProject {
    // define always create the constant on global namespace    
    define('CONSTANT_NAMESPACE', 'JKL ');
    
    // Can be called there ...
    echo CONSTANT_NAMESPACE;
    
}

namespace MySecondProject{
    // there ...
    echo CONSTANT_NAMESPACE;
}

namespace {
    // or There ...
    echo CONSTANT_NAMESPACE;
}
