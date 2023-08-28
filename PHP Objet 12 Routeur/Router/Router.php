<?php

namespace Router;

use Exceptions\RouteNotFindException;

class Router
{
    // - Déclarer une propriété privée pour stocker les routes
    private array $routes;

    // - Créer la méthode register qui prend 2 paramètres (1. l'URI(string), 2. l'action(callable, fonction anonyme))
    public function register(string $path, callable|array $action)
    {
        $this->routes[$path] = $action;
    }

    public function resolve(string $uri): mixed
    {
        var_dump(explode('?', $uri)[0]);
        $path = explode('?', $uri)[0];
        $action = $this->routes[$path] ?? null;

        // - Si c'est un callable on le retourne directement
        if (is_callable($action)) {
            return $action;
        }

        // - Si c'est un tableau on va instancier la class et appeler la méthode 
        if (is_array($action)) {
            var_dump($action);

            // - 'Unpacking' sur le tableau : 1. sera stocké dans $className, 2. sera stocké dans $method
            // - $className = $action[0], $methode = $action[1]
            [$className, $method] = $action;

            // - On vérifie si la classe et la méthode existent
            if (class_exists($className) && method_exists($className, $method)) {
                // - On peut instancier la class
                $class = new $className();
                // - Fonction native de PHP pour créer un callback grâce à un tableau
                return call_user_func_array([$class, $method], []);
            }
        }

        throw new RouteNotFindException();
    }
}
