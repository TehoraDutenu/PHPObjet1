<?php
class Card
{
    // - PHP 7
    /*     private int $quantity;
    public float $priceTotal;

    public function __construct($quantity, $priceTotal)
    {
        $this->quantity = $quantity;
        $this->priceTotal = $priceTotal;
    }
 */

    public function __construct(private int $quantity, private float $priceTotal)
    {
    }

    // - Getter pour récupérer la valeur d'une propriété privée
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    // - Setter pour modifier la valeur d'une propriété privée
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    // - Getter pour récupérer la valeur d'une propriété privée
    public function getPriceTotal()
    {
        return $this->priceTotal;
    }

    // - Setter pour modifier la valeur d'une propriété privée
    public function setPriceTotal(float $priceTotal)
    {
        $this->priceTotal = $priceTotal;
    }

    // - Fonction pour appliquer un %
    public function discount(float $discount): void
    {
        $this->priceTotal -= $this->priceTotal * $discount / 100;
    }
}
