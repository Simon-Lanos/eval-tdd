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
        $this->assertEquals(1, RomanConverter::romanToDecimal('I'));
        $this->assertEquals(2, RomanConverter::romanToDecimal('II'));
        $this->assertEquals(4, RomanConverter::romanToDecimal('IV'));
        $this->assertEquals(5, RomanConverter::romanToDecimal('V'));
        $this->assertEquals(6, RomanConverter::romanToDecimal('VI'));
        $this->assertEquals(9, RomanConverter::romanToDecimal('IX'));
        $this->assertEquals(10, RomanConverter::romanToDecimal('X'));
        $this->assertEquals(11, RomanConverter::romanToDecimal('XI'));
        $this->assertEquals(16, RomanConverter::romanToDecimal('XVI'));
        $this->assertEquals(20, RomanConverter::romanToDecimal('XX'));
        $this->assertEquals(50, RomanConverter::romanToDecimal('L'));
        $this->assertEquals(100, RomanConverter::romanToDecimal('C'));
        $this->assertEquals(500, RomanConverter::romanToDecimal('D'));
        $this->assertEquals(1000, RomanConverter::romanToDecimal('M'));
    }
}
