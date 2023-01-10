<?php

declare(strict_types=1);

namespace App\Test\V1;

use App\V1\Calculator;
use Generator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testItAddsTwoNumbers(): void
    {
        $calc = new Calculator();

        $result = $calc->add(2, 4);

        $this->assertSame(6, $result);
    }

    /** @dataProvider provideAdditionCases */
    public function testItAddsTwoNumbersWithMoreData(int $one, int $two, int $expected): void
    {
        $calc = new Calculator();

        $result = $calc->add($one, $two);

        $this->assertSame($expected, $result);
    }

    public function provideAdditionCases(): Generator
    {
        yield [1, 2, 3];
        yield [4, 0, 4];
        yield [1, -2, -1];
    }
}
