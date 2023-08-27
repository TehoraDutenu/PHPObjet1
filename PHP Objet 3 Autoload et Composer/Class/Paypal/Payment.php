<?php

namespace Class\Paypal;

use DateTime;
use Class\Users\User;

class Payment
{
    public function __construct()
    {
        var_dump(new User());
        var_dump(new DateTime());
    }
}
