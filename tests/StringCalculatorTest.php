<?php

namespace App\Tests;

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    public function testEmptyStringShouldReturnZero() {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(0,$stringCalculator->add(""));
    }

    public function testOneNumberStringShouldReturnTheNumber() {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(1,$stringCalculator->add("1"));
    }

    public function testTwoNumberStringShouldReturnTheSum() {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(3,$stringCalculator->add("1,2"));
    }

    public function testMultipleNumberStringShouldReturnTheSum() {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(9,$stringCalculator->add("1,2,6"));
    }

}