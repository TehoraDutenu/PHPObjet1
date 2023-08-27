<?php

namespace Class;

// - Design pattern : Singleton
class Impagno
{
    // - Attribut en private qui va stocker l'instance de sa propre class
    private static ?self $_instance = null;

    // - On déclare le constructeur
    public function __construct()
    {
        echo 'Nouvelle instance de la classe Impagno';
    }

    public static function getInstance()
    {
        // - Vérifier si $_instance = null
        // - ce qui voudrait dire qu'on n'a jamais instancié la class
        // - si c'est le cas, on instancie la class
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }
        // - Sinon on retourne l'instance
        return self::$_instance; // - Pour ne pas instancier la classe plus d'une fois
    }
}
