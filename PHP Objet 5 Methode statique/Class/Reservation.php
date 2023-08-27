<?php

namespace Class;

class Reservation
{
    // - Déclarer une propriété statique
    private static $count = 0;

    // - Constructeur
    public function __construct(
        public string $information
    ) {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}
