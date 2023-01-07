<?php

declare(strict_types=1);

namespace App\V2;

class Calculator
{
    public function __construct(
        private Database $database,
    ) {
    }

    public function addStoredNumber(int $number): int
    {
        return $number + $this->database->getNumberFromDatabase();
    }
}
