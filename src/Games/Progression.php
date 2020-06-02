<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\game;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
const MAX_INCRIMENT = 10;
const ARRAY_SIZE = 10;
function brainProgression()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $init_value = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $prog_step = rand(MIN_RAND_NUMBER, MAX_INCRIMENT);
        $hidden = rand(0, ARRAY_SIZE - 1);
        $progressionElements = [];
        for ($l = 0; $l < ARRAY_SIZE; $l++) {
            $progressionElements[] = $init_value + $prog_step * $l;
        }
        $hidden = array_rand($progressionElements);
        $questions[$i]['answer'] = $progressionElements[$hidden];
        $progressionElements[$hidden] = '..';
        $questions[$i]['question'] = implode(' ', $progressionElements);
    }
    $intro = 'What number is missing in the progression?';
    game($intro, $questions);
}
