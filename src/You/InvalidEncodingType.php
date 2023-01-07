<?php

declare(strict_types=1);

namespace App\You;

use InvalidArgumentException;

use function implode;
use function sprintf;

final class InvalidEncodingType extends InvalidArgumentException
{
    /** @param array<string> $allowedTypes */
    public static function create(string $invalidType, array $allowedTypes): self
    {
        return new self(
            sprintf(
                'Type "%s" is not allowed, only %s are',
                $invalidType,
                implode(', ', $allowedTypes),
            ),
        );
    }
}
