<?php

namespace Class;

class ChildClass extends ParentClass
{
    protected static string $name = "ChildClass";
    // - On ne redéclare pas getName() car elle est héritée de la class parente
}
