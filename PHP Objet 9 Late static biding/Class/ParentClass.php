<?php

namespace Class;

class ParentClass
{
    protected static string $name = "ParentClass";

    public function getName()
    {
        return static::$name;
    }
}
