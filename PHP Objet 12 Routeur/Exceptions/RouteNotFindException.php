<?php

namespace Exceptions;

class RouteNotFindException extends \Exception
{
    protected $message = 'La route n\'existe pas';
}
