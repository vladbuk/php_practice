<?php

namespace Index;

class MyClass
{
    private $data = [];
    
    public function __construct($array) {
        $this->data = $array;    
    }

    public function getData() {
        return $this->data;
    }

    public function setData($array) {
        $this->data = $array;
    }

    public function addData($array) {
        $this->data = array_merge($this->data, $array);
    }

    public function delData() {
        $this->data = [];
    }

    public function toString() {
        return implode(', ', $this->data);
    }

}

$obj = new \Index\MyClass(["x" => "икс", "y" => "игрек"]);

print_r($obj->getData());

$obj->delData();

print_r($obj->getData());

$obj->setData(["y" => "игрек", "z" => "зед"]);

print_r($obj->getData());

$obj->addData(["a" => "буква А"]);

print_r($obj->getData());

echo("Данные: " . $obj->toString());

// var_dump($obj);
