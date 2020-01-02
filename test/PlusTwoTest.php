<?php

namespace Test;

use App\PlusTwo;
use PHPUnit\Framework\TestCase;

class PlusTwoTest extends TestCase
{
    /**
     * @param int $value
     * @param int $expectedValue
     *
     * @dataProvider provideCorrectParamToExecuteFunction
     */
    public static function testExecuteFunction_ShouldReturnCorrectValue_WhenPassesCorrectParam(
        int $value,
        int $expectedValue
    ): void {
        $result = PlusTwo::execute($value);

        self::assertEquals($expectedValue, $result);
    }

    public static function provideCorrectParamToExecuteFunction(): iterable
    {
        yield 'integer positive number and its expected return 1' => [2, 4];
        yield 'integer positive number and its expected return 2' => [20, 40];
        yield 'integer positive number and its expected return 3' => [-10, -20];
    }
}
