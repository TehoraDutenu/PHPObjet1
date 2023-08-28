<?php
// /!\ composer.json !!!! (lando composer dump-autoload)

// - Définir une constante qui va pointer sur le chemin relatif du dossier views
define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

use Source\App;
use Router\Router;
use Exceptions\RouteNotFindException;

require '../vendor/autoload.php';

// - Instancier notre class Router
$router = new Router();

// - Enregistrer les routes de notre application
// - Deux paramètres : 1. l'URI(key), 2. l'action (la value)
/* $router->register('/', function () {
    echo 'HomePage';
});

$router->register('/contact', function () {
    echo 'Page contact';
});
 */

// - Enregistrer les routes avec ses controllers
$router->register('/', ['Controllers\HomeController', 'index']);

(new App($router, $_SERVER['REQUEST_URI']))->run();
