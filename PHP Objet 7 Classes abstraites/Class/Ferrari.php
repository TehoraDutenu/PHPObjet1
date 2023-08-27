<?php

namespace Class;

class Ferrari extends Voiture
{
    public function marque(): string
    {
        return 'je suis un véhicule italien de la marque ' . $this->marque;
    }
}
