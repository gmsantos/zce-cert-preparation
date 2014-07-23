<?php

// Namespace MUST be the first declaration in file
//echo 'Hello World';  // Fatal error

namespace MyProject {
    class MyClass {
        const CONSTANT = 'ABC ';
    }
}

namespace { // Global Scope
    echo MyProject\MyClass::CONSTANT;
}

namespace MySecondProject {
    
    // Relative namespace MySecondProject + \MyProject
    echo MyProject\MyClass::CONSTANT;
    
    // '\' maps to Global Scope
    echo \MyProject\MyClass::CONSTANT;
}

namespace MySecondProject\MyProject { // Subnamespace
    class MyClass {
        const CONSTANT = 'DEF ';
    }
}