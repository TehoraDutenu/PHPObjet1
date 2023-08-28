<?php

namespace Class;

use Class\Exceptions\UserException;
use Class\Exceptions\UserIsBanException;
use Class\Exceptions\UserNotVerifiedException;

class login
{
    public function __construct(protected User $user)
    {
    }

    public function login(): bool|string
    {
        if (!$this->user->isVerified()) {
            // throw new UserNotVerifiedException('Utilisateur non confirmé');
            throw UserException::notVerified();
        }
        if ($this->user->isBan()) {
            throw new UserIsBanException();
        }

        return true;
    }
}
