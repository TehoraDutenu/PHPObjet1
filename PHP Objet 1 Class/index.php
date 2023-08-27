<?php

// - Require et instancier la class Card
require_once "Card.php";
$card = new Card(5, 10.99);

var_dump($card->getPriceTotal());

// - Récupérer la valeur de quantity
var_dump($card->getQuantity());

// - Changer la valeur de quantity(setter)
$card->setQuantity(10);
var_dump($card->getQuantity());

$card->setPriceTotal(100);
var_dump($card->getPriceTotal());

// - Appliquer une réduction de 10%
$card->discount(10);
var_dump($card->getPriceTotal());
