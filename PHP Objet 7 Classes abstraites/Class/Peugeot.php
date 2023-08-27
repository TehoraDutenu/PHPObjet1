<?php

namespace Class;

class Peugeot extends Voiture
{
    public function marque(): string
    {
        return 'je suis un véhicule français de la marque ' . $this->marque;
    }
}
