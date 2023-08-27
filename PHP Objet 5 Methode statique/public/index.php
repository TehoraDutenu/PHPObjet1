<?php

use Class\Impagno;
use Class\Reservation;

require '../vendor/autoload.php';

$reservation = new Reservation('Reservation pour demain');
$reservation = new Reservation('Reservation pour demain');
$reservation = new Reservation('Reservation pour demain');
$reservation = new Reservation('Reservation pour demain');

// var_dump($reservation::getCount());
var_dump(Impagno::getInstance());
