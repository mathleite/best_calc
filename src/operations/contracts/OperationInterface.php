<?php

namespace App\operations\contracts;

interface OperationInterface
{
    public static function initialize(iterable $numbers): iterable;
}