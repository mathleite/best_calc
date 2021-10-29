
<?php

namespace App\operations\entities;

use App\operations\contracts\AbstractOperation;

class Multiplication extends AbstractOperation
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