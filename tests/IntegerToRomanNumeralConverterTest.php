<?php

namespace App\Tests;

use App\IntegerToRomanNumeralConverter;
use PHPUnit\Framework\TestCase;

class IntegerToRomanNumeralConverterTest extends TestCase
{
    public function testOneShouldReturnI() {
        $converter = new IntegerToRomanNumeralConverter();
        $this->assertEquals('I',$converter->__invoke(1));
    }
}