<?php

namespace Class;

class Zoe extends Voiture
{
    private string $name = 'Zoe';
    use Hybridable;

    // - On va greffer notre trait
    // use Rechargeable, Dieselable {
    // - On lui indique quelle méthode rouler() il doit choisir
    // Rechargeable::rouler insteadof Dieselable;
    // Dieselable::rouler insteadof Rechargeable;
    // }
    // {
    // - Dans les {}on peut indiquer ce que l'on souhaite conserver du trait en le renommant
    // Rechargeable::rouler as rouler_electric;
    // }

    // public function rouler($km)
    // {
    // - Rappeler la méthode du trait avec sont alias
    // $this->rouler_electric($km);

    // $this->km += $km * 2;
    // }
}
