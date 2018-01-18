<?php

namespace Index;

spl_autoload_register(function ($class_name) {
	require_once $class_name . '.php';
});

$obj1 = new \NS\Class1();
$obj2 = new \NS\Class2();