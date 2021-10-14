<?php

namespace App\operations\entities;

use App\operations\contracts\AbstractOperation;
use App\operations\contracts\OperationInterface;

class Sum extends AbstractOperation implements OperationInterface
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