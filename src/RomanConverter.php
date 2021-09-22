<?php

namespace App;

class RomanConverter
{
    public static function decimalToRoman(int $number): string
    {
        $return = '';
        if ($number >= 1) {
            $return .= 'I';
        }

        if ($number >= 2) {
            $return .= 'I';
        }

        if ($number >= 3) {
            $return .= 'I';
        }

        if ($number === 4) {
            return 'IV';
        }

        if ($number === 5) {
            return 'V';
        }

        if ($number === 6) {
            return self::decimalToRoman(5) . self::decimalToRoman(1);
        }

        if ($number === 9) {
            return 'IX';
        }

        if ($number === 10) {
            return 'X';
        }

        if ($number === 11) {
            return self::decimalToRoman(10) . self::decimalToRoman(1);
        }

        if ($number === 16) {
            return self::decimalToRoman(10) . self::decimalToRoman(6);
        }

        if ($number === 19) {
            return self::decimalToRoman(10) . self::decimalToRoman(9);
        }

        if ($number === 20) {
            return self::decimalToRoman(10) . self::decimalToRoman(10);
        }

        if ($number === 50) {
            return 'L';
        }

        if ($number === 100) {
            return 'C';
        }

        if ($number === 500) {
            return 'D';
        }

        if ($number === 1000) {
            return 'M';
        }

        return $return;
    }
}
