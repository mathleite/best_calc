<?php

namespace Test\operations\entities;

use App\operations\entities\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    /**
     * @dataProvider provideItemsAndExpectedSubtractionValue
     */
    public function test_foo(int|float $expectedOperationValue, ...$items)
    {
        $operation = new Multiplication(...$items);
        self::assertSame($expectedOperationValue, $operation->execute());
    }

    public static function provideItemsAndExpectedSubtractionValue(): iterable
    {
        yield [8, 2, 4];
        yield [0, 10, 0];
        yield [-32, 16, -2];
        yield [25, 5, 5];
    }
}
