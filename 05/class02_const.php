<?php

namespace NS;

class ClassConst
{
    const MAXWEIGHT = 80;
    const MINWEIGHT = 60;
    private const AGE = 45;
    
    public function showConst() {
        echo self::AGE  . "\n";
    }
}

echo \NS\ClassConst::MINWEIGHT . PHP_EOL;
echo \NS\ClassConst::MAXWEIGHT;

$cs = new \NS\ClassConst();

$cs->showConst();
$cs::AGE;
