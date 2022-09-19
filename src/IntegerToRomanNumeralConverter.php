<?php

namespace App;

class IntegerToRomanNumeralConverter
{
    public function __invoke(int $number):string
    {
        if ($number < 4) {
            $solution = str_repeat('I', $number);
            return $solution;
        }
        return 'IV';

    }

}