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

    public function testTwoShouldReturnII() {
        $converter = new IntegerToRomanNumeralConverter();
        $this->assertEquals('II',$converter->__invoke(2));
    }

    public function testTwoShouldReturnIII() {
        $converter = new IntegerToRomanNumeralConverter();
        $this->assertEquals('III',$converter->__invoke(3));
    }
}