<?php

namespace App\operations\entities;

use App\operations\contracts\BaseOperation;

class Division extends BaseOperation
{
    private iterable $numbers;

    public function __construct(int|float ...$numbers)
    {
        self::initialize($numbers);
        $this->numbers = $numbers;
    }

    public function execute(): int|float
    {
        $count = 0;
        foreach ($this->numbers as $key => $number) {
            if (empty($count)) {
                $count = $number;
                continue;
            }

            $count = $count / $number;
        }
        return $count;
    }
}