<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\play;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function isPrime($a)
{
    if ($a == 2) {
        return true;
    }
    if ($a < 2) {
        return false;
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
        $gameData[$i]['question'] = $number;
        $gameData[$i]['answer'] = isPrime($number) ? 'yes' : 'no';
    }
    $intro = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    play($intro, $gameData);
}
