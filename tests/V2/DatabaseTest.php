<?php

declare(strict_types=1);

namespace App\Test\V2;

use App\V2\Database;
use LogicException;
use PHPUnit\Framework\TestCase;

final class DatabaseTest extends TestCase
{
    public function testGetNumberFromDBIsNotImplemented(): void
    {
        $database = new Database();

        $this->expectException(LogicException::class);
        $database->getNumberFromDatabase();
    }
}
