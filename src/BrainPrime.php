<?php

namespace BrainGames\BrainPrime;

use BrainGames\Cli;

const ROUNDS_COUNT = 3;
const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function isPrime($a)
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
    $name = Cli\run('Answer "yes" if given number is prime. Otherwise answer "no".');
    $count = 0;
    while ($count < ROUNDS_COUNT) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $question = $a;
        $correct_answer = isPrime($a);
        $count += Cli\ask($question, (string) $correct_answer, $name);
    }
    Cli\congrat($name);
}
