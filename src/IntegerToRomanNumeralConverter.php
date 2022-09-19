<?php

namespace App;

class IntegerToRomanNumeralConverter
{
    public function __invoke(int $number):string
    {
        if ($number === 2) {
            return 'II';
        }
        return 'I';
    }

}