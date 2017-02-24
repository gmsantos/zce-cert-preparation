<?php

require_once 'Bugger.php';
require_once 'MyException.php';

try {
    
    // Pode dar ruim
    $b = new Bugger;
    $b->exc();
    
} catch (DomainException $e) {
    echo $e;
    
    try {
        $b->reconnect();
    } catch (OverflowException $e){
        echo $e;
        
        try {
            $b->generico();
        } catch (MyException $e) {
            echo $e;
        }
        
    } 
    
} finally {
    (unset) $b;
}