<?php

namespace App\Constants;

class DocumentTypes
{
    public const CC = 'cc';
    public const NIT = 'nit';
    public const CE = 'ce';
    public const PPT = 'ppt';

    /**
     * @return array
     */
    public static function all(): array
    {
        return [
            self::CC,
            self::NIT,
            self::CE,
            self::PPT,
        ];
    }

    /**
     * @param string $value
     * @return bool
     */
    public static function isValid(string $value): bool
    {
        return in_array($value, self::all(), true);
    }
}
