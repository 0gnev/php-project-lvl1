<?php

namespace BrainGames\BrainEven;

use BrainGames\Engine;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function brain_even()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $questions[$i] = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $answers[$i] = $questions[$i] % 2 == 0 ? "yes" : "no";
    }
    Engine\game('Answer "yes" if the number is even, otherwise answer "no".', $questions, $answers);
}
