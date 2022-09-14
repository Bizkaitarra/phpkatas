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

}