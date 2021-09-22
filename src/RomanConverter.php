<?php

namespace App;

class RomanConverter
{
    private const ROMAN_MAP = [
        'M'  => 1000,
        'D'  => 500,
        'C'  => 100,
        'L'  => 50,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1,
    ];

    public static function decimalToRoman(int $number): string
    {
        $return = '';

        foreach (self::ROMAN_MAP as $romanValue => $numberValue) {
            if ($number >= $numberValue) {
                $return .= $romanValue . self::decimalToRoman($number - $numberValue);
                break;
            }
        }

        return $return;
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
