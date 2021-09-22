<?php

namespace App;

class RomanConverter
{
    private const ROMAN_MAP = [
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    public static function decimalToRoman(int $number): string
    {
        if ($number >= 1000) {
            return 'M' . self::decimalToRoman($number - 1000);
        }

        if ($number >= 500) {
            return 'D' . self::decimalToRoman($number - 500);
        }

        if ($number >= 100) {
            return 'C' . self::decimalToRoman($number - 100);
        }

        if ($number >= 50) {
            return 'L' . self::decimalToRoman($number - 50);
        }

        if ($number >= 10) {
            return 'X' . self::decimalToRoman($number - 10);
        }

        if ($number >= 9) {
            return 'IX' . self::decimalToRoman($number - 9);
        }

        if ($number >= 5) {
            return 'V' . self::decimalToRoman($number - 5);
        }

        if ($number >= 4) {
            return 'IV' . self::decimalToRoman($number - 4);
        }

        if ($number >= 1) {
            return 'I' . self::decimalToRoman($number - 1);
        }
        return '';
    }

    public static function romanToDecimal(string $roman): int
    {
        $return = 0;
        foreach (self::ROMAN_MAP as $romanValue => $numberValue) {
            if (strpos($roman, $romanValue) === 0) {
                $return += $numberValue + self::romanToDecimal(substr($roman, strlen($romanValue)));
                break;
            }
        }

        return $return;
    }
}
