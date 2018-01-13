<?php

namespace NS;

/**
 * SimpleClass class
 */
class SimpleClass
{
    public $var = "Значение переменной класса";

    /**
     * Function getVar()
     *
     * @return void
     */
    public function getVar() 
    {
        return $this->var;
    }
}

class Foo
{
    public $bar = 'свойство';

    public function bar()
    {
        return 'родительский метод';
    }
}

$s = new SimpleClass();
// print_r($s->getVar());

$newClass = "NS\SimpleClass";
$s1 = new $newClass();
$s1->var = "Новое значение переменной класса";

print_r($s->getVar());
print_r($s1->getVar());

echo PHP_EOL;

// echo (new Foo)->bar, PHP_EOL, (new Foo)->bar(), PHP_EOL;


class Bar extends Foo
{
    public $bar = "новое свойство";

    public function bar()
    {
        echo parent::bar() . "\n";
        echo 'дочерний метод' . "\n";
    }
}

echo (new Bar)->bar . "\n";
echo (new Bar)->bar() . "\n";

echo \NS\SimpleClass::class;