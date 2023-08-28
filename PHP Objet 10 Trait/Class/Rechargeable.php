<?php

namespace Class;

trait Rechargeable
{
    public int $energy = 100;

    public function recharger()
    {
        $this->energy = 100;
    }

    // - On a le droit de redéfinir des méthodes
    public function rouler($km)
    {
        parent::rouler($km);
        $this->energy -= $km / 10;
    }
}
