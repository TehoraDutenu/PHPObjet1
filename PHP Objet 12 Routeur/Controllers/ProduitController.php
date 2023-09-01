<?php

namespace Controllers;

use Modeles\Produit;
use Source\Renderer;

// - Classe qui va gérer toute la logique qui concerne la page Home
class ProduitController
{
    public function index()
    {
        $produitModel = new Produit();

        // - Appeller la méthode all
        $produits = $produitModel->all();

        return Renderer::make('produit/index', compact('produits'));
    }
}
