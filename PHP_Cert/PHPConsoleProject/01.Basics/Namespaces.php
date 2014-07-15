<?php

namespace MyProject {
    // Namespace MUST be the first declaration in file
    const CONSTANT = 'ABC ';
}

namespace { // Global Scope
    echo MyProject\CONSTANT;
}

namespace MySecondProject {
    // '\' maps to Global Scope
    echo \MyProject\CONSTANT;
}