<?php

namespace MyProject {
    // Namespace MUST be the first declaration in file
    const CONSTANT = 'ABC ';
}

namespace { // global code
    echo MyProject\CONSTANT;
}

namespace MySecondProject {
    // '\' maps to global namespace
    echo \MyProject\CONSTANT;
}