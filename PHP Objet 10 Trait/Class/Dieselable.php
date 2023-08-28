<?php

namespace Class;

trait Dieselable
{
    public function rouler($km)
    {
        echo 'je produis des particules fines tous les' . $km . 'kms';
    }
}
