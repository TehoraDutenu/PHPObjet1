<?php

namespace Class;

use Class\Enums\ReservationStatus;

class Reservation
{
    // - Constante
    public ReservationStatus $status;

    // - On crée le constructeur et on echo  la constante
    public function __construct()
    {
        // - On peut appeller la classe
        //echo Reservation::APPROVAL_PENDING . '<br>';*/ 
        // - ou faire référence à $this
        //echo $this::APPROVAL_PENDING . '<br>';*/ 
        // - ou faire référence à $self
        //echo self::APPROVAL_PENDING . '<br>'

        $this->status = ReservationStatus::APPROVAL_PENDING;
    }
}
