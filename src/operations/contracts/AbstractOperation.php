<?php

namespace App\operations\contracts;

use App\operations\exceptions\NotNumericValueException;

abstract class AbstractOperation implements OperationInterface
{
    public static function initialize(iterable $numbers): iterable
    {
        if (empty($numbers)) {
            throw new \InvalidArgumentException('Must to have numbers to initialize operation');
        }

        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                throw new NotNumericValueException();
            }
        }
        return $numbers;
    }
}