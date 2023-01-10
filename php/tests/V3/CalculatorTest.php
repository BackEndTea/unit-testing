<?php

declare(strict_types=1);

namespace App\Test\V3;

use App\V3\Calculator;
use App\V3\Database;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testItStoresNumberInDatabase(): void
    {
        $database = $this->createMock(Database::class);
        $database
            ->expects($this->once())
            ->method('addNumberToDatabase')
            ->with(5);

        $calculator = new Calculator($database);

        $calculator->storeNumberInDatabase(5);
    }
}
