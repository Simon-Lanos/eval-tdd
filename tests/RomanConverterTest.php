<?php

use \App\RomanConverter;
use \PHPUnit\Framework\TestCase;

class RomanConverterTest extends TestCase
{
    public function testDecimalToRoman(): void
    {
        $this->assertEquals('', RomanConverter::decimalToRoman(0));
    }
}
