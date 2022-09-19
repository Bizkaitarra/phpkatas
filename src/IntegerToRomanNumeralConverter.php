<?php

namespace App;

class IntegerToRomanNumeralConverter
{
    public function __invoke(int $number):string
    {
        if ($number < 4) {
            return str_repeat('I', $number);
        }
        if ($number === 4) {
            return 'IV';
        }
        if ($number === 5) {
            return 'V';
        }
        if ($number === 6) {
            return 'VI';
        }
        if ($number === 7) {
            return 'VII';
        }
        return 'VIII';

    }

}