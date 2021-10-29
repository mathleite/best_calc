<?php

namespace Test\operations\entities;

use App\operations\entities\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    /**
     * @dataProvider provideItemsAndExpectedSubtractionValue
     */
    public function test_foo(int|float $expectedOperationValue, ...$items)
    {
        $operation = new Subtraction(...$items);
        self::assertSame($expectedOperationValue, $operation->execute());
    }

    public static function provideItemsAndExpectedSubtractionValue(): iterable
    {
        yield [-3, "1", "2"];
        yield [-11, "8", "3"];
        yield [-32, 16, 16];
        yield [0, 0, 0, 0];
    }
}
