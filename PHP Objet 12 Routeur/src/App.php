<?php

namespace Source;

use Router\Router;
use Exceptions\RouteNotFindException;

class App
{
    // - Créer un constructeur avec une instance de Router et un URI
    public function __construct(private Router $router, private string $uri)
    {
    }
    public function run()
    {
        try {
            echo $this->router->resolve($this->uri);
        } catch (RouteNotFindException $e) {
            echo $e->getMessage();
        }
    }
}
