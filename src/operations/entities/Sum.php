<?php

namespace App\operations\entities;

use App\operations\contracts\BaseOperation;

class Sum extends BaseOperation
{
    private iterable $numbers;

    public function __construct(int|float ...$numbers)
    {
        self::initialize($numbers);
        $this->numbers = $numbers;
    }

    public function execute(): int|float
    {
        return array_sum($this->numbers);
    }
}
