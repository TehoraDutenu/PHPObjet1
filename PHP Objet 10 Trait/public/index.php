<?php

use Class\Zoe;

require '../vendor/autoload.php';

$zoe = new Zoe();
$zoe->energy = 50;
var_dump($zoe);

$zoe->recharger();
$zoe->rouler(20);
var_dump($zoe);
