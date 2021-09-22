<?php

use \App\RomanConverter;
use \PHPUnit\Framework\TestCase;

class RomanConverterTest extends TestCase
{
    public function testDecimalToRoman(): void
    {
        $this->assertEquals('', RomanConverter::decimalToRoman(0));
        $this->assertEquals('I', RomanConverter::decimalToRoman(1));
        $this->assertEquals('II', RomanConverter::decimalToRoman(2));
        $this->assertEquals('IV', RomanConverter::decimalToRoman(4));
        $this->assertEquals('V', RomanConverter::decimalToRoman(5));
        $this->assertEquals('VI', RomanConverter::decimalToRoman(6));
        $this->assertEquals('X', RomanConverter::decimalToRoman(10));
        $this->assertEquals('XI', RomanConverter::decimalToRoman(11));
        $this->assertEquals('XVI', RomanConverter::decimalToRoman(16));
        $this->assertEquals('XIX', RomanConverter::decimalToRoman(19));
        $this->assertEquals('XX', RomanConverter::decimalToRoman(20));
        $this->assertEquals('L', RomanConverter::decimalToRoman(50));
        $this->assertEquals('C', RomanConverter::decimalToRoman(100));
        $this->assertEquals('D', RomanConverter::decimalToRoman(500));
        $this->assertEquals('M', RomanConverter::decimalToRoman(1000));
    }

    public function testRomanToDecimal(): void
    {
        $this->assertEquals(0, RomanConverter::romanToDecimal(''));
    }
}
