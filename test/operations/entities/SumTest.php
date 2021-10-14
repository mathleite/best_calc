<?php

namespace Test\operations\entities;

use App\operations\entities\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    /**
     * @dataProvider provideItemsAndExpectedSumValue
     */
    public static function test_AssertSum_MustRetrieveCorrectSumOfItems(int|float $expectedSumValue, ...$itemsToSum)
    {
        $operation = new Sum(...$itemsToSum);
        self::assertSame($expectedSumValue, $operation->execute());
    }

    public static function provideItemsAndExpectedSumValue(): iterable
    {
        yield [10, 1, 2, 3, 4];
        yield [20, 1, 2, 3, 4, 10];
        yield [14, 16, -2];
        yield [5.5, 5, 0.5];
    }
}
