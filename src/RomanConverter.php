<?php

namespace App;

class RomanConverter
{

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
}
