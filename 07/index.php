<?php

namespace Index;

spl_autoload_register(function($classname) {
    require_once __DIR__ . '/' . str_replace('\\', '/', $classname) . ".php";
});

$myObj = new \Classes\Parentclass("parent string");

echo $myObj->getString() . PHP_EOL;

// var_dump($myObj);

$myObj2 = new \Classes\Nestedclass("строка наследуемого класса");

echo $myObj2->getString() . PHP_EOL;

// var_dump($myObj2);

$myObj3 = new \Classes\Subclass();

// $myObj3->setString("строка субкласса");
try {
	$myObj3->setString(["строка субкласса"]);
} catch (\Exception $e) {
	echo "Выброшено исключение. " . $e->getMessage();
}

echo $myObj3->getString();
// var_dump($myObj3);
