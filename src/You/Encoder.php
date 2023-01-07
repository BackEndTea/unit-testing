<?php

declare(strict_types=1);

namespace App\You;

use function base64_encode;
use function str_rot13;

final class Encoder
{
    public const BASE_64 = 'md5';
    public const ROT_13  = 'rot_13';

    public function encode(string $type, string $stringToEncode): string
    {
        if ($type === self::BASE_64) {
            return base64_encode($stringToEncode);
        }

        if ($type === self::ROT_13) {
            return str_rot13($stringToEncode);
        }

        throw InvalidEncodingType::create($type, [self::BASE_64, self::ROT_13]);
    }
}
