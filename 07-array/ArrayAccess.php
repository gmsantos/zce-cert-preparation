<?php

class myClass {

}

class arrayClass implements ArrayAccess {

    protected $container = [];

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

}

$a = new myClass;

$a->a = '123';
echo $a->a . PHP_EOL;

$b = new arrayClass;
$b['a'] = 1232133;

var_dump(isset($b['c'])) . PHP_EOL;;

echo $b['a'] . PHP_EOL;;

