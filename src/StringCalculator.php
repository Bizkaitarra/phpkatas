<?php

namespace App;

class StringCalculator
{
    public function add(string $numbers): int {
        if (is_numeric($numbers)) {
            return $numbers;
        }
        $numbersAsArray = explode(",", $numbers);
        if (count($numbersAsArray) === 2) {
            return (int) $numbersAsArray[0] + (int) $numbersAsArray[1];
        }
        return 0;

    }

}