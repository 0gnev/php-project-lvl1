<?php

namespace BrainGames\Games\BrainPrime;

use BrainGames\Engine;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function is_prime($a)
{
    if ($a === 2) {
        return true;
    }
    $i = 2;
    while ($i <= sqrt($a)) {
        if ($a % $i == 0) {
            return false;
        }
        $i++;
    }
    return true;
}

function brain_prime()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $questions[$i] = $number;
        $answers[$i] = is_prime($number) ? 'yes' : 'no';
    }
    Engine\game('Answer "yes" if given number is prime. Otherwise answer "no".', $questions, $answers);
}
