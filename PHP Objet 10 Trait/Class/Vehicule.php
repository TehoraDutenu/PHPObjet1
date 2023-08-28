<?php

namespace Class;

class Vehicule
{
    protected int $roue = 4;
    protected int $km = 0;

    public function rouler($km)
    {
        $this->km += $km;
    }
}
