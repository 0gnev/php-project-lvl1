<?php

namespace BrainGames\BrainPrime;

use BrainGames\Engine;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function is_prime($a)
{
    if ($a === 2) {
        return 'yes';
    }
    $i = 2;
    while ($i <= sqrt($a)) {
        if ($a % $i == 0) {
            return 'no';
        }
        $i++;
    }
    return 'yes';
}

function brain_prime()
{
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $questions[$i] = $a;
        $answers[$i] = is_prime($a);
    }
    Engine\game('Answer "yes" if given number is prime. Otherwise answer "no".', $questions, $answers);
}
