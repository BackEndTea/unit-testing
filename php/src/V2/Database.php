<?php

declare(strict_types=1);

namespace App\V2;

use LogicException;

class Database
{
    /**
     * Not using an actual database atm.
     */
    public function getNumberFromDatabase(): int
    {
        throw new LogicException('Database not implemented');
    }
}
