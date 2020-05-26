<?php

namespace BrainGames\BrainProgression;

use BrainGames\Engine;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
const INCRIMENT = 10;
const ARRAY_SIZE = 10;
function brain_progression()
{
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $a = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $k = rand(MIN_RAND_NUMBER, INCRIMENT);
        $m = rand(0, ARRAY_SIZE - 1);
        $questions[$i] = '';
        for ($l = 0; $l < ARRAY_SIZE; $l++) {
            if ($l == $m) {
                $questions[$i] .= '.. ';
            } else {
                $temp = $a + $k * $i;
                $questions[$i] .= "{$temp} ";
            }
        }
        $answers[$i] = $a + $k * $m;
    }
    Engine\game('What number is missing in the progression?', $questions, $answers);
}
