<?php

use Class\User;
use Class\Login;
use Class\Exceptions\UserException;
use Class\Exceptions\UserIsBanException;
use Class\Exceptions\UserNotVerifiedException;

require '../vendor/autoload.php';

$user = new User('toto', 'password');
$login = new Login($user);
// var_dump($login->login());

// - On essaie de se connercter avec un try catch
try {
    $login->login();
} catch (UserException $e) {
    echo $e->getMessage() . 'sur la ligne ' . $e->getLine() . ' dans le fichier ' . $e->getFile() . '<br>';
}
