<?php

namespace App;

class IntegerToRomanNumeralConverter
{
    public function __invoke(int $number):string
    {
        if ($number < 4) {
            $solution = '';
            for ($i=0;$i<$number;$i++) {
                $solution .= 'I';
            }
            return $solution;
        }
        return 'IV';

    }

}