<?php

declare(strict_types=1);

namespace App\Test\V2;

use App\V2\Calculator;
use App\V2\Database;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testItAddsStoredNumber(): void
    {
        $database = $this->createStub(Database::class);
        $database->method('getNumberFromDatabase')->willReturn(3);
        $calculator = new Calculator($database);

        $result = $calculator->addStoredNumber(6);

        $this->assertSame(9, $result);
    }
}
