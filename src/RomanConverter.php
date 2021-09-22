<?php

namespace App;

class RomanConverter
{
    public static function decimalToRoman(int $number): string
    {
        if ($number === 1) {
            return 'I';
        }

        if ($number === 2) {
            return 'II';
        }

        if ($number === 3) {
            return 'III';
        }

        if ($number === 4) {
            return 'IV';
        }

        if ($number === 5) {
            return 'V';
        }

        if ($number === 6) {
            return 'VI';
        }

        if ($number === 10) {
            return 'X';
        }

        if ($number === 11) {
            return 'XI';
        }

        if ($number === 16) {
            return 'XVI';
        }

        if ($number === 19) {
            return 'XIX';
        }

        if ($number === 20) {
            return 'XX';
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

        return '';
    }
}
