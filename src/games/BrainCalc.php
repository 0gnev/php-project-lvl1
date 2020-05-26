<?php

namespace BrainGames\BrainCalc;

use BrainGames\Engine;

use const BrainGames\Config\ROUNDS_COUNT;

const MIN_RAND_NUMBER = 1;
const MAX_RAND_NUMBER = 100;

function brain_calc()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $sign = rand(1, 3);
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $b = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        if ($sign === 1) {
            $sign = '+';
            $answers[$i] = $a + $b;
        } elseif ($sign === 2) {
            $sign = '-';
            $answers[$i] = $a - $b;
        } else {
            $sign = '*';
            $answers[$i] = $a * $b;
        }
        $questions[$i] = "{$a} {$sign} {$b}";
    }
    Engine\game("What is the result of the expression?", $questions, $answers);
}
