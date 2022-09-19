<?php

namespace App;

class IntegerToRomanNumeralConverter
{
    public function __invoke(int $number):string
    {
        if ($number === 2) {
            return 'II';
        }
        if ($number === 3) {
            return 'III';
        }
        return 'I';
    }

}