<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\play;

use const BrainGames\Config\ROUNDS_COUNT;

const MIN_RAND_NUMBER = 1;
const MAX_RAND_NUMBER = 100;

function brainCalc()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $b = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];
        switch ($operator) {
            case '+':
                $gameData[$i]['answer'] = $a + $b;
                break;
            case '-':
                $gameData[$i]['answer'] = $a - $b;
                break;
            case '*':
                $gameData[$i]['answer'] = $a * $b;
                break;
        }
        $gameData[$i]['question'] = "{$a} {$operator} {$b}";
    }
    $intro = "What is the result of the expression?";
    play($intro, $gameData);
}
