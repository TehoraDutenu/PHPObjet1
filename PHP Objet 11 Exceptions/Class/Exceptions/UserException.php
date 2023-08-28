<?php

namespace Class\Exceptions;

class UserException extends \Exception
{
    public static function notVerified(): static
    {
        return new static('utilisateur non confirmé (en mode static)');
    }
}
