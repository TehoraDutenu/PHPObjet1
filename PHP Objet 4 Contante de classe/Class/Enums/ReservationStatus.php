<?php

namespace Class\Enums;

enum ReservationStatus
{
    case APPROVAL_PENDING;
    case APPROVAL_ACCEPTED;
    case APPROVAL_REFUSED;
}
