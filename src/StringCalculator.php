<?php

namespace App;

class StringCalculator
{
    public function add(string $numbers): int {
        if ($numbers === '') {
            return 0;
        }

        if (strpos(',\n', $numbers) > 0 || strpos('\n,', $numbers) > 0) {
            //the following input is NOT ok: “1,\n”
            throw new \LogicException('The string is not well formed');
        }

        $numbers = str_replace('\n', ",", $numbers);

        $numbersAsArray = explode(",", $numbers);

        $add = 0;

        foreach ($numbersAsArray as $number) {
            $add += (int) $number;
        }

        return $add;

    }

}