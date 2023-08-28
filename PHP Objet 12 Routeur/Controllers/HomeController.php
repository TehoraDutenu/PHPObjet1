<?php

namespace Controllers;

use Source\Renderer;

// - Classe qui va gérer toute la logique qui concerne la page Home
class HomeController
{
    public function index()
    {
        return Renderer::make('home/index');
    }
}
