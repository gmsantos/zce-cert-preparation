<?php

class lateBinding {

    protected static $t = 'batata';

    public function lanche()
    {
        echo static::$t . "\n";
    }

}

class lateBindingChild extends lateBinding {

    protected static $t = 'batata frita';
    
}

$late = new lateBinding();
$lateChild = new lateBindingChild();

$late->lanche();
$lateChild->lanche();
