<?php

namespace BrainGames\BrainEven;

use BrainGames\Cli;

const ROUNDS_COUNT = 3;
const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function brain_even()
{
    $name = Cli\run('Answer "yes" if the number is even, otherwise answer "no".');
    $count = 0;
    while ($count < ROUNDS_COUNT) {
        $rand_number = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $correct_answer = $rand_number % 2 == 0 ? "yes" : "no";
        $count += Cli\ask($rand_number, $correct_answer, $name);
    }
    Cli\congrat($name);
}
