<?php

namespace Test\operations\entities;

use App\operations\entities\Division;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    /**
     * @dataProvider provideItemsAndExpectedDivisionValue
     */
    public function test_ShouldExecuteCorrectDivision(int|float $expectedResult, int|float ...$numbers): void
    {
        $operation = new Division(...$numbers);
        Assert::assertEquals($expectedResult, $operation->execute());
    }

    public static function provideItemsAndExpectedDivisionValue(): iterable
    {
        yield [8, 8, 1];
        yield [5, 50, 2, 5];
        yield [-32, 32, -1];
        yield [1, 1, 1, 1, 1, 1];
    }
}
