<?php

namespace BrainGames\Games\Calc;

use const BrainGames\Config\ROUNDS_COUNT;

use function BrainGames\Engine\game;

const MIN_RAND_NUMBER = 1;
const MAX_RAND_NUMBER = 100;

function brainCalc()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $b = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $operators = ['+', '-', '*'];
        switch (rand(0, 2)) {
            case 0:
                $sign = $operators[0];
                $questions[$i]['answer'] = $a + $b;
                break;
            case 1:
                $sign = $operators[1];
                $questions[$i]['answer'] = $a - $b;
                break;
            case 2:
                $sign = $operators[2];
                $questions[$i]['answer'] = $a * $b;
                break;
        }
        $questions[$i]['question'] = "{$a} {$sign} {$b}";
    }
    $intro = "What is the result of the expression?";
    game($intro, $questions);
}
