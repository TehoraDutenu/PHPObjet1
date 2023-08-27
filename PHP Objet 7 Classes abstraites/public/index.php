<?php

use Class\Ferrari;
use Class\Peugeot;

require '../vendor/autoload.php';

$peugeot = new Peugeot('Peugeot');
var_dump($peugeot->marque(), $peugeot->rouler());

$ferrari = new Ferrari('Ferrari');
var_dump($ferrari->marque(), $ferrari->rouler());
