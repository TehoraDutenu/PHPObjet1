<?php

namespace Class;

class User
{
    public function __construct(public string $username, public string $password)
    {
    }

    public function isVerified(): bool
    {
        return false;
    }

    public function isBan(): bool
    {
        return false;
    }
}
