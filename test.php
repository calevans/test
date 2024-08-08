<?php

require_once 'classA.php';
require_once 'classB.php';
require_once 'classC.php';

$a = new classA();
$b = new classB();
$c = new classC();

echo $a->methodA('John'); // works
echo "\n";
echo $b->methodB('123'); // works
echo "\n";
echo $b->methodB('1 Cal Evans'); // Fail
echo "\n";
echo $b->methodA('123'); // works
echo "\n";
echo $c->methodC('123'); // works
echo "\n";
