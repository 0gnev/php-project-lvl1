<?php

namespace BrainGames\Games\Even;

use const BrainGames\Config\ROUNDS_COUNT;

use function BrainGames\Engine\game;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
function brainEven()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $questions[$i]['question'] = $number;
        $questions[$i]['answer'] = $number % 2 == 0 ? "yes" : "no";
    }
    $intro = 'Answer "yes" if the number is even, otherwise answer "no".';
    game($intro, $questions);
}
