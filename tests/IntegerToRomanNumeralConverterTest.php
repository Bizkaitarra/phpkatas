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

    public function testThreeShouldReturnIII() {
        $converter = new IntegerToRomanNumeralConverter();
        $this->assertEquals('III',$converter->__invoke(3));
    }

    public function testFourShouldReturnIV() {
        $converter = new IntegerToRomanNumeralConverter();
        $this->assertEquals('IV',$converter->__invoke(4));
    }

    public function testFiveShouldReturnV() {
        $converter = new IntegerToRomanNumeralConverter();
        $this->assertEquals('V',$converter->__invoke(5));
    }

    public function testSixShouldReturnVI() {
        $converter = new IntegerToRomanNumeralConverter();
        $this->assertEquals('VI',$converter->__invoke(6));
    }

    public function testSevenShouldReturnVII() {
        $converter = new IntegerToRomanNumeralConverter();
        $this->assertEquals('VII',$converter->__invoke(7));
    }
}