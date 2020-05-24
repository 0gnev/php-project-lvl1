<?php

namespace BrainGames\BrainCalc;

use BrainGames\Cli;

use const BrainGames\BrainEven\MAX_RAND_NUMBER;
use const BrainGames\BrainEven\MIN_RAND_NUMBER;

const MIN_RANDOM_NUMBER = 1;
const MAX_RANDOM_NUMBER = 100;
const ROUNDS_COUNT = 3;

function brain_calc()
{
    $name = Cli\run("What is the result of the expression?");
    $count = 0;
    while ($count < ROUNDS_COUNT) {
        $sign = rand(1, 3);
        if ($sign === 1) {
            $sign = '+';
        } elseif ($sign === 2) {
            $sign = '-';
        } else {
            $sign = '*';
        }
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $b = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $equation = "{$a} {$sign} {$b}";
        $correct_answer = null;
        eval('$correct_answer = ' . $equation . ';');
        $count += Cli\ask($equation, (string) $correct_answer, $name);
    }
    Cli\congrat($name);
}
