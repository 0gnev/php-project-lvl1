<?php

namespace BrainGames\Games\BrainGcd;

use BrainGames\Engine;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function get_gcd($a, $b)
{
    while ($a != 0 && $b != 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    return $a + $b;
}
function brain_gcd()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $b = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $questions[$i] = "{$a} {$b}";
        $answers[$i] = get_gcd($a, $b);
    }
    Engine\game('Find the greatest common divisor of given numbers.', $questions, $answers);
}
