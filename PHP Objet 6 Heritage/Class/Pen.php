<?php

namespace Class;

class Pen
{
    // - Deux arguments
    private string $brand = 'Bic';

    public function __construct(public string $color)
    {
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    // - Méthode pour écrire
    public function write(string $message): void
    {
        printf(
            '<span style="color: %s">%s</span>',
            $this->color,
            $message
        );
    }
}
