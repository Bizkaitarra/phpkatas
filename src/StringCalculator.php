<?php

namespace App;

class StringCalculator
{
    public function add(string $numbers): int {
        if ($numbers === '') {
            return 0;
        }

        $numbersAsArray = explode(",", $numbers);
        $add = 0;

        foreach ($numbersAsArray as $number) {
            $add += (int) $number;
        }

        return $add;

    }

}