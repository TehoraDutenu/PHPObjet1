<?php

namespace Class;

abstract class Voiture
{
    // - Déclaration d'une propriété marque dans le constructeur
    public function __construct(protected string $marque)
    {
    }

    public function rouler()
    {
        return 'je roule';
    }

    abstract public function marque(): string;
}
