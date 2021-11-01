<?php

namespace App\operations\entities;

use App\operations\contracts\BaseOperation;

class Multiplication extends BaseOperation
{
    private iterable $numbers;

    public function __construct(int|float ...$numbers)
    {
        self::initialize($numbers);
        $this->numbers = $numbers;
    }

    public function execute(): int|float
    {
        $count = 1;
        foreach ($this->numbers as $number) {
            $count *= $number;
        }
        return $count;
    }
}