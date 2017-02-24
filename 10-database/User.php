<?php

namespace Season\Model;

class User {
    
    protected $id;
    protected $name;
    protected $idade;
    
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    
    public function __toString(){
        return $this->name . ',  ' . $this->idade;
    }
    
}
