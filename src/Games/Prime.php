<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\game;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function isPrime($a)
{
    if ($a <= 2) {
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

function brainPrime()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $questions[$i]['question'] = $number;
        $questions[$i]['answer'] = isPrime($number) ? 'yes' : 'no';
    }
    $intro = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    game($intro, $questions);
}
