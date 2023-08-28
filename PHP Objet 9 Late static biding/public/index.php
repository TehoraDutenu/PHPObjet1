<?php

use Class\ChildClass;
use Class\ParentClass;

require '../vendor/autoload.php';

$parent = new ParentClass();
$child = new ChildClass();

var_dump($parent->getName());
var_dump($child->getName());
