<?php

namespace App;

class StringCalculator
{
    public function add(string $numbers): int {
        if (is_numeric($numbers)) {
            return $numbers;
        }
        return 0;

    }

}