<?php

use Class\FontainPen;
use Class\Pen;

require '../vendor/autoload.php';

$pen = new Pen('black');
var_dump($pen);
$pen->write('J\'écris avec mon stylo Bic');

$fontainPen = new FontainPen('red', 150);
$fontainPen->setBrand('Reynolds');
var_dump($fontainPen);
$fontainPen->write('1J\'écris avec mon stylo Reynolds');
$fontainPen->write('2J\'écris avec mon stylo Reynolds');
$fontainPen->write('3J\'écris avec mon stylo Reynolds');
$fontainPen->write('4J\'écris avec mon stylo Reynolds');

$fontainPen->recharge();

$fontainPen->write('5J\'écris avec mon stylo Reynolds');
$fontainPen->write('6J\'écris avec mon stylo Reynolds');
$fontainPen->write('7J\'écris avec mon stylo Reynolds');
$fontainPen->write('8J\'écris avec mon stylo Reynolds');
