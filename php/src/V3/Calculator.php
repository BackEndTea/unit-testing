<?php

declare(strict_types=1);

namespace App\V3;

class Calculator
{
    public function __construct(
        private Database $database,
    ) {
    }

    public function storeNumberInDatabase(int $number): void
    {
        $this->database->addNumberToDatabase($number);
    }
}
