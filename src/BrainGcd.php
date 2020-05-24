<?php

namespace BrainGames\BrainGcd;

use BrainGames\Cli;

const ROUNDS_COUNT = 3;
const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function brain_gcd()
{

    $name = Cli\run('Find the greatest common divisor of given numbers.');
    $count = 0;
    while ($count < ROUNDS_COUNT) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $b = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $question = "{$a} {$b}";
        while ($a != 0 && $b != 0) {
            if ($a > $b) {
                $a = $a % $b;
            } else {
                $b = $b % $a;
            }
        }
        $correct_answer = $a + $b;
        $count += Cli\ask($question, (string) $correct_answer, $name);
    }
    Cli\congrat($name);
}
