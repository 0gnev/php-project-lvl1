<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\play;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_FIRST_ELEMENT = 100;
const MIN_FIRST_ELEMENT = 1;
const MIN_STEP = 0;
const MAX_STEP = 10;
const PROGRESSION_SIZE = 10;
function brainProgression()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstElement = rand(MIN_FIRST_ELEMENT, MAX_FIRST_ELEMENT);
        $progStep = rand(MIN_STEP, MAX_STEP);
        $progressionElements = [];
        for ($l = 0; $l < PROGRESSION_SIZE; $l++) {
            $progressionElements[] = $firstElement + $progStep * $l;
        }
        $hidden = array_rand($progressionElements);
        $gameData[$i]['answer'] = $progressionElements[$hidden];
        $progressionElements[$hidden] = '..';
        $gameData[$i]['question'] = implode(' ', $progressionElements);
    }
    $intro = 'What number is missing in the progression?';
    play($intro, $gameData);
}
