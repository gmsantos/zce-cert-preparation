<?php

require_once 'MyException.php';

class Bugger {
    
    public function __construct()
    {
        echo 'construiu ';
        
    }
    
    public function exc()
    {
        echo 'exc ';
        throw new DomainException;
    }
    
    public function reconnect()
    {
        echo ' teste';
        throw new OverflowException;
    }
    
    public function generico()
    {
        throw new MyException('Mais especifico desse erro');
    }
    
    public function teste()
    {
        return 12 / 0;
    }
    
}