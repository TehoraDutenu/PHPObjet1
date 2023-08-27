<?php

use Class\Reservation;

require '../vendor/autoload.php';

// Pour récupérer une constante, on n'a pas besoin d'instancier la classe
// On utilise directement le nom de la classe suivi de "::" et du nom de la constante
// les :: s'appelle Paamayim Nekudotayim
// echo Reservation::APPROVAL_PENDING;

// On va imaginer qu'il y a du code ici
// Et un moment donnée on aura un retour
// du serveur qui nous renvoie : 
$status = 'en attente';

// On passe une condition
// if ($status == Reservation::APPROVAL_PENDING) {
//     echo 'il faut attendre un peu';
// }

$reservation = new Reservation();
var_dump($reservation);
