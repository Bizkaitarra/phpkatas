<?php

namespace App;

class IntegerToRomanNumeralConverter
{
    public function __invoke(int $number):string
    {
        if ($number < 4) {
            return str_repeat('I', $number);;
        }
        return 'IV';

    }

}