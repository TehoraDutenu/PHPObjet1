<?php

namespace Class\Exceptions;

class UserIsBanException extends \Exception
{
    protected $message = 'Utilisateur banni';
}
