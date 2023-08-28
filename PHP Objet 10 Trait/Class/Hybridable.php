<?php

namespace Class;

trait Hybridable
{
    use Dieselable, Rechargeable {
        // - On renome la méthode de rechargeable
        Rechargeable::rouler as rouler_electric;
        // - on renomme la méthode dieselable
        Dieselable::rouler as rouler_diesel;
    }

    public function rouler($km)
    {
        // - On rappelle la méthode du trait
        $this->rouler_electric($km);
        $this->rouler_diesel($km);
    }
}
