<?php 

class obj implements Serializable {
    private $data;

    public function __construct() {
        $this->data = "My private data";
    }

    public function serialize() {
        return serialize($this->data);
    }

    public function unserialize($data) {
        $this->data = unserialize($data);
    }
    
    public function getData() {
        return $this->data;
    }
}

$obj = new obj;
$ser = serialize($obj);
var_dump($ser);

$newobj = unserialize($ser);
var_dump($newobj->getData());

$modObj = unserialize('C:3:"obj":27:{s:19:"My private data :))";}');
var_dump($modObj->getData());
