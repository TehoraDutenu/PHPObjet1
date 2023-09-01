<?php

namespace Controllers;

use Modeles\User;
use Source\Renderer;

// - Classe qui va gérer toute la logique qui concerne la page Home
class HomeController
{
    public function index()
    {
        $userModel = new User();

        // - Appeller la méthode all
        $users = $userModel->all();

        return Renderer::make('home/index', compact('users'));
    }
}
