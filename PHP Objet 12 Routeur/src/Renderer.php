<?php

namespace Source;

class Renderer
{
    public function __construct(private string $viewPath)
    {
    }

    public static function make(string $viewPath): static
    {
        return new static($viewPath);
    }

    public function view()
    {
        // - Démarrer le système de mise en tampon de PHP
        ob_start();

        // - Récupérer la constante qui nous mène au dossier views 
        // - Lui passer la fin du chemin à travers $viewPath : require '../views/home/index.php
        require BASE_VIEW_PATH . $this->viewPath . '.php';

        // - Lire le contenu courant du tampon de sortie puis on l'efface
        return ob_end_clean();
    }

    public function __toString(): string
    {
        return $this->view();
    }
}
