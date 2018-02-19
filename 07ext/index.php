<?php

namespace Index;

//set_include_path(realpath('Classes') . PATH_SEPARATOR . get_include_path());

spl_autoload_register(function($classname) {
    require_once __DIR__ . '/' . str_replace('\\', '/', $classname) . ".php";
});

$obj1 = new \Classes\Parentclass();

$obj1->set(["key1" => "value1", "key2" => "value2"]);

print_r($obj1->get());

$obj1->add("mykey", "myvalue");

$obj2 = new \Classes\Subclass(["subkey" => "subvalue"]);

// print_r($obj2->toString());

$obj2->add("newkey", "newvalue");

// echo $obj2->toString();

echo $obj2->tohtml();

// var_dump($obj1);
