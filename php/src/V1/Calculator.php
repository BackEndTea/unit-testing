<?php

declare(strict_types=1);

namespace App\V1;

class Calculator
{
    public function add(int $one, int $two): int
    {
        return $one + $two;
    }
}
