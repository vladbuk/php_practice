<?php

namespace NS;

class ClassA
{
    protected $arr = [];

    public function __construct($arr) {
        $this->arr = $arr;
    }
    
    public function __set($name, $value) {
        $this->arr[$name] = $value;
    }

    public function getArr() {
        return $this->arr;
    }

    public function setArr($arr) {
        $this->arr = $arr;
    }
}

$myClass = new \NS\ClassA([1, 2, 3]);

var_dump($myClass->getArr());

$myClass->newName = "newname";
// $myClass->setArr = [4, 5, 6];

var_dump($myClass->getArr());
