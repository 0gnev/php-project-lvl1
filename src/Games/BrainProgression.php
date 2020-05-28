<?php
    
namespace BrainGames\Games\BrainProgression;

use BrainGames\Engine;

use const BrainGames\Config\ROUNDS_COUNT;

const MAX_RAND_NUMBER = 100;
const MIN_RAND_NUMBER = 1;
const INCRIMENT = 10;
const ARRAY_SIZE = 10;
function brain_progression()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $init_value = rand(MIN_RAND_NUMBER, MAX_RAND_NUMBER);
        $prog_step = rand(MIN_RAND_NUMBER, INCRIMENT);
        $hidden = rand(0, ARRAY_SIZE - 1);
        $questions[$i] = '';
        for ($l = 0; $l < ARRAY_SIZE; $l++) {
            if ($l == $hidden) {
                $questions[$i] .= '.. ';
            } else {
                $temp = $init_value + $prog_step * $i;
                $questions[$i] .= "{$temp} ";
            }
        }
        $answers[$i] = $init_value + $prog_step * $hidden;
    }
    Engine\game('What number is missing in the progression?', $questions, $answers);
}
