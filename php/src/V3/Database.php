<?php

declare(strict_types=1);

namespace App\V3;

use LogicException;

class Database
{
    /**
     * Not using an actual database atm.
     */
    public function addNumberToDatabase(): int
    {
        throw new LogicException('Database not implemented');
    }
}
