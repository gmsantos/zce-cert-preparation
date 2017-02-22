<?php

class myException extends Exception
{ 
    public function __toString()
    {
        return 'linha do erro:' .  $this->getLine()  . ' Mensagem: ' . $this->getMessage();
    }    
}