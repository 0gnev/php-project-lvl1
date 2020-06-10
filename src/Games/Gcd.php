<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\play;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function getGcd($a, $b)
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
function brainGcd()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $b = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $gameData[$i]['question'] = "{$a} {$b}";
        $gameData[$i]['answer'] = getGcd($a, $b);
    }
    $intro = 'Find the greatest common divisor of given numbers.';
    play($intro, $gameData);
}
